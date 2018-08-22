<?php

namespace Ewall\Account\Observer;

use Magento\Framework\Locale\Currency;
use Magento\Framework\Event\ObserverInterface;

class ModifyCurrencyOptions implements ObserverInterface
{
    /**
     * @var \Magento\CurrencySymbol\Model\System\CurrencysymbolFactory
     */
    protected $symbolFactory;

    const RIGHT = 16;

    /**
     * @param \Magento\CurrencySymbol\Model\System\CurrencysymbolFactory $symbolFactory
     */
    public function __construct(\Magento\CurrencySymbol\Model\System\CurrencysymbolFactory $symbolFactory)
    {
        $this->symbolFactory = $symbolFactory;
    }

    /**
     * Generate options for currency displaying with custom currency symbol
     *
     * @param \Magento\Framework\Event\Observer $observer
     * @return $this
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $writer = new \Zend\Log\Writer\Stream(BP.'/var/log/stackexchange.log');
        $logger = new \Zend\Log\Logger();
        $logger->addWriter($writer);

        $baseCode = $observer->getEvent()->getBaseCode();
        $logger->info("xxxxxxxxxxxxxxxxxx===>".$baseCode);
        $currencyOptions = $observer->getEvent()->getCurrencyOptions();
        $originalOptions = $currencyOptions->getData();
        $currencyOptions->setData($this->getCurrencyOptions($baseCode, $originalOptions));

        return $this;
    }

    /**
     * Get currency display options
     *
     * @param string $baseCode
     * @param array $originalOptions
     * @return array
     */
    protected function getCurrencyOptions($baseCode, $originalOptions)
    {
        $currencyOptions = [];

        if ($baseCode == 'VND') {

            $currencyOptions['position'] = self::RIGHT; // switch currency symbol position to the RIGHT
        }

        return array_merge($originalOptions, $currencyOptions);
    }
}
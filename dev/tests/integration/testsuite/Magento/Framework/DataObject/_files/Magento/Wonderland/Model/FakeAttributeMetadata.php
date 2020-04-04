<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

<<<<<<< HEAD
<<<<<<< HEAD:dev/tests/integration/testsuite/Magento/Framework/DataObject/_files/Magento/Wonderland/Model/FakeAttributeMetadata.php
<<<<<<< HEAD:dev/tests/integration/testsuite/Magento/Framework/DataObject/_files/Magento/Wonderland/Model/FakeAttributeMetadata.php
<<<<<<< HEAD
<<<<<<< HEAD:dev/tests/integration/testsuite/Magento/Framework/DataObject/_files/Magento/Wonderland/Model/FakeAttributeMetadata.php
namespace Magento\Wonderland\Api\Model;
=======
namespace Magento\Wonderland\Model\Data;
>>>>>>> parent of 401b74af... Updating 2.3.4 version:dev/tests/integration/testsuite/Magento/Framework/DataObject/_files/Magento/Wonderland/Model/Data/FakeAttributeMetadata.php
=======
namespace Magento\Wonderland\Api\Model;
>>>>>>> parent of 401b74af... Updating 2.3.4 version
=======
namespace Magento\Wonderland\Api\Model;
>>>>>>> parent of 401b74af... Updating 2.3.4 version:dev/tests/integration/_files/Magento/TestModuleExtensionAttributes/Model/Data/FakeAttributeMetadata.php
=======
namespace Magento\Wonderland\Model\Data;
>>>>>>> parent of 401b74af... Updating 2.3.4 version:dev/tests/integration/testsuite/Magento/Framework/DataObject/_files/Magento/Wonderland/Model/Data/FakeAttributeMetadata.php
=======
namespace Magento\Wonderland\Api\Model;
>>>>>>> parent of 401b74af... Updating 2.3.4 version

/**
 * Customer attribute metadata class.
 */
class FakeAttributeMetadata extends \Magento\Framework\Api\AbstractSimpleObject implements
    \Magento\Wonderland\Api\Data\FakeAttributeMetadataInterface
{
    /**
     * {@inheritdoc}
     */
    public function getAttributeCode()
    {
        return $this->_get(self::ATTRIBUTE_CODE);
    }

    /**
     * {@inheritdoc}
     */
    public function getStoreLabel()
    {
        return $this->_get(self::STORE_LABEL);
    }

    /**
     * {@inheritdoc}
     */
    public function getFrontendLabel()
    {
        return $this->_get(self::FRONTEND_LABEL);
    }

    /**
     * {@inheritdoc}
     */
    public function getNote()
    {
        return $this->_get(self::NOTE);
    }

    /**
     * Set attribute code
     *
     * @param string $attributeCode
     * @return $this
     */
    public function setAttributeCode($attributeCode)
    {
        return $this->setData(self::ATTRIBUTE_CODE, $attributeCode);
    }

    /**
     * Set label of the store.
     *
     * @param string $storeLabel
     * @return $this
     */
    public function setStoreLabel($storeLabel)
    {
        return $this->setData(self::STORE_LABEL, $storeLabel);
    }

    /**
     * Set label which supposed to be displayed on frontend.
     *
     * @param string $frontendLabel
     * @return $this
     */
    public function setFrontendLabel($frontendLabel)
    {
        return $this->setData(self::FRONTEND_LABEL, $frontendLabel);
    }

    /**
     * Set the note attribute for the element.
     *
     * @param string $note
     * @return $this
     */
    public function setNote($note)
    {
        return $this->setData(self::NOTE, $note);
    }
}

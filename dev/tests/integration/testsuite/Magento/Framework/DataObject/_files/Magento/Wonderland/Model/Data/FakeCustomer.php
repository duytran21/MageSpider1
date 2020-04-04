<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

<<<<<<< HEAD:dev/tests/integration/testsuite/Magento/Framework/DataObject/_files/Magento/Wonderland/Model/Data/FakeCustomer.php
<<<<<<< HEAD:dev/tests/integration/testsuite/Magento/Framework/DataObject/_files/Magento/Wonderland/Model/Data/FakeCustomer.php
<<<<<<< HEAD:dev/tests/integration/testsuite/Magento/Framework/DataObject/_files/Magento/Wonderland/Model/Data/FakeCustomer.php
<<<<<<< HEAD:dev/tests/integration/testsuite/Magento/Framework/DataObject/_files/Magento/Wonderland/Model/Data/FakeCustomer.php
<<<<<<< HEAD
<<<<<<< HEAD:dev/tests/integration/testsuite/Magento/Framework/DataObject/_files/Magento/Wonderland/Model/Data/FakeCustomer.php
namespace Magento\Wonderland\Model\Data;
=======
namespace Magento\Wonderland\Api\Model;
>>>>>>> parent of 401b74af... Updating 2.3.4 version:dev/tests/integration/testsuite/Magento/Framework/DataObject/_files/Magento/Wonderland/Model/FakeCustomer.php
=======
namespace Magento\Wonderland\Model\Data;
>>>>>>> parent of 401b74af... Updating 2.3.4 version
=======
namespace Magento\Wonderland\Model\Data;
>>>>>>> parent of 401b74af... Updating 2.3.4 version:dev/tests/integration/_files/Magento/TestModuleExtensionAttributes/Model/Data/FakeCustomer.php
=======
namespace Magento\Wonderland\Model\Data;
>>>>>>> parent of 401b74af... Updating 2.3.4 version:dev/tests/integration/_files/Magento/TestModuleExtensionAttributes/Model/Data/FakeCustomer.php
=======
namespace Magento\Wonderland\Model\Data;
>>>>>>> parent of 401b74af... Updating 2.3.4 version:dev/tests/integration/_files/Magento/TestModuleExtensionAttributes/Model/Data/FakeCustomer.php
=======
namespace Magento\Wonderland\Model\Data;
>>>>>>> parent of 0d5d5354... Merge branch 'development' into production:dev/tests/integration/_files/Magento/TestModuleExtensionAttributes/Model/Data/FakeCustomer.php

/**
 * Class Customer
 *
 */
class FakeCustomer extends \Magento\Framework\Api\AbstractExtensibleObject implements
    \Magento\Wonderland\Api\Data\FakeCustomerInterface
{
    /**
     * Get email address
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->_get(self::EMAIL);
    }

    /**
     * Get first name
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->_get(self::FIRSTNAME);
    }

    /**
     * Get customer id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->_get(self::ID);
    }

    /**
     * Get last name
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->_get(self::LASTNAME);
    }

    /**
     * Set customer id
     *
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        return $this->setData(self::ID, $id);
    }

    /**
     * Set email address
     *
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        return $this->setData(self::EMAIL, $email);
    }

    /**
     * Set first name
     *
     * @param string $firstname
     * @return $this
     */
    public function setFirstname($firstname)
    {
        return $this->setData(self::FIRSTNAME, $firstname);
    }

    /**
     * Set last name
     *
     * @param string $lastname
     * @return string
     */
    public function setLastname($lastname)
    {
        return $this->setData(self::LASTNAME, $lastname);
    }

    /**
     * Get prefix
     *
     * @return string|null
     */
    public function getPrefix()
    {
        return $this->_get(self::PREFIX);
    }

    /**
     * Set prefix
     *
     * @param string $prefix
     * @return $this
     */
    public function setPrefix($prefix)
    {
        return $this->setData(self::PREFIX, $prefix);
    }

    /**
     * {@inheritdoc}
     *
     * @return \Magento\Wonderland\Api\Data\FakeCustomerExtensionInterface|null
     */
    public function getExtensionAttributes()
    {
        return $this->_getExtensionAttributes();
    }

    /**
     * {@inheritdoc}
     *
     * @param \Magento\Wonderland\Api\Data\FakeCustomerExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(
        \Magento\Wonderland\Api\Data\FakeCustomerExtensionInterface $extensionAttributes
    ) {
        return $this->_setExtensionAttributes($extensionAttributes);
    }
}

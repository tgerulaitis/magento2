<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Vault\Model\Ui;

use Magento\Vault\Api\Data\PaymentTokenInterface;

/**
 * Interface TokenUiComponentProviderInterface
 * @package Magento\Vault\Model\Ui
 * @api
 */
interface TokenUiComponentProviderInterface
{
    const COMPONENT_NONCE_URL = 'nonceUrl';
    const COMPONENT_DETAILS = 'details';
    const COMPONENT_PUBLIC_HASH = 'publicHash';

    /**
     * @param PaymentTokenInterface $paymentToken
     * @return TokenUiComponentInterface
     */
    public function getComponentForToken(PaymentTokenInterface $paymentToken);
}

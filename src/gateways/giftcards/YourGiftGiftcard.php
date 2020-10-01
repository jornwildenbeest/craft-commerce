<?php declare(strict_types=1);


namespace multisafepay\multisafepay\gateways\giftcards;

use Craft;
use multisafepay\multisafepay\gateways\base\BaseGateway;

/**
 * Class YourGiftGiftcard
 * @package multisafepay\multisafepay\gateways\giftcards
 */
class YourGiftGiftcard extends BaseGateway
{

    /**
     * Returns the display name of this class.
     *
     * @return string The display name of this class.
     */
    public static function displayName(): string
    {
        return Craft::t('multisafepay', 'YourGift');
    }

    /**
     * @return string
     */
    public static function getGatewayCode(): string
    {
        return 'YOURGIFT';
    }

    /**
     * @return string
     */
    public static function getType(): string
    {
        return 'redirect';
    }
}
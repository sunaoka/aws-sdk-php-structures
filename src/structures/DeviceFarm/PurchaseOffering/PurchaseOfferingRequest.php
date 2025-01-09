<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\PurchaseOffering;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $offeringId
 * @property int $quantity
 * @property string $offeringPromotionId
 */
class PurchaseOfferingRequest extends Request
{
    /**
     * @param array{
     *     offeringId: string,
     *     quantity: int,
     *     offeringPromotionId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\RenewOffering\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OfferingStatus $offeringStatus
 * @property string $transactionId
 * @property string $offeringPromotionId
 * @property \Aws\Api\DateTimeResult $createdOn
 * @property MonetaryAmount $cost
 */
class OfferingTransaction extends Shape
{
    /**
     * @param array{
     *     offeringStatus?: OfferingStatus,
     *     transactionId?: string,
     *     offeringPromotionId?: string,
     *     createdOn?: \Aws\Api\DateTimeResult,
     *     cost?: MonetaryAmount
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

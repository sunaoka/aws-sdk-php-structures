<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListOfferingTransactions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OfferingStatus|null $offeringStatus
 * @property string|null $transactionId
 * @property string|null $offeringPromotionId
 * @property \Aws\Api\DateTimeResult|null $createdOn
 * @property MonetaryAmount|null $cost
 */
class OfferingTransaction extends Shape
{
    /**
     * @param array{
     *     offeringStatus?: OfferingStatus|null,
     *     transactionId?: string|null,
     *     offeringPromotionId?: string|null,
     *     createdOn?: \Aws\Api\DateTimeResult|null,
     *     cost?: MonetaryAmount|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

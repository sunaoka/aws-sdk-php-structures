<?php

namespace Sunaoka\Aws\Structures\ElastiCache\PurchaseReservedCacheNodesOffering\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $RecurringChargeAmount
 * @property string $RecurringChargeFrequency
 */
class RecurringCharge extends Shape
{
    /**
     * @param array{
     *     RecurringChargeAmount?: double,
     *     RecurringChargeFrequency?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

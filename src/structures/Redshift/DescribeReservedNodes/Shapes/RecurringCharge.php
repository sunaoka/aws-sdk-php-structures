<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeReservedNodes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $RecurringChargeAmount
 * @property string|null $RecurringChargeFrequency
 */
class RecurringCharge extends Shape
{
    /**
     * @param array{
     *     RecurringChargeAmount?: double|null,
     *     RecurringChargeFrequency?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

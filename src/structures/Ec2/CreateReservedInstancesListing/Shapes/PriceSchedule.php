<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateReservedInstancesListing\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Active
 * @property 'USD' $CurrencyCode
 * @property double $Price
 * @property int $Term
 */
class PriceSchedule extends Shape
{
    /**
     * @param array{
     *     Active?: bool,
     *     CurrencyCode?: 'USD',
     *     Price?: double,
     *     Term?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

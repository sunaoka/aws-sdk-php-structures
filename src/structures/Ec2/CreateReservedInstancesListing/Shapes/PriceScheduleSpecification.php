<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateReservedInstancesListing\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Term
 * @property double $Price
 * @property 'USD' $CurrencyCode
 */
class PriceScheduleSpecification extends Shape
{
    /**
     * @param array{
     *     Term?: int,
     *     Price?: double,
     *     CurrencyCode?: 'USD'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

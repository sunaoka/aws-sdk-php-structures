<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateReservedInstancesListing\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Term
 * @property double|null $Price
 * @property 'USD'|null $CurrencyCode
 */
class PriceScheduleSpecification extends Shape
{
    /**
     * @param array{
     *     Term?: int|null,
     *     Price?: double|null,
     *     CurrencyCode?: 'USD'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateReservedInstancesListing\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'USD'|null $CurrencyCode
 * @property double|null $Price
 * @property int|null $Term
 */
class PriceScheduleSpecification extends Shape
{
    /**
     * @param array{
     *     CurrencyCode?: 'USD'|null,
     *     Price?: double|null,
     *     Term?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

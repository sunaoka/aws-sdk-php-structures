<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateReservedInstancesListing\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Active
 * @property 'USD'|null $CurrencyCode
 * @property double|null $Price
 * @property int|null $Term
 */
class PriceSchedule extends Shape
{
    /**
     * @param array{
     *     Active?: bool|null,
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

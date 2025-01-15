<?php

namespace Sunaoka\Aws\Structures\Ec2\GetReservedInstancesExchangeQuote\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $InstanceCount
 * @property string|null $OfferingId
 */
class TargetConfiguration extends Shape
{
    /**
     * @param array{
     *     InstanceCount?: int|null,
     *     OfferingId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

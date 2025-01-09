<?php

namespace Sunaoka\Aws\Structures\Ec2\GetReservedInstancesExchangeQuote\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $InstanceCount
 * @property string $OfferingId
 */
class TargetConfiguration extends Shape
{
    /**
     * @param array{
     *     InstanceCount?: int,
     *     OfferingId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Ec2\GetReservedInstancesExchangeQuote\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $InstanceCount
 * @property string $OfferingId
 */
class TargetConfigurationRequest extends Shape
{
    /**
     * @param array{
     *     InstanceCount?: int|null,
     *     OfferingId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

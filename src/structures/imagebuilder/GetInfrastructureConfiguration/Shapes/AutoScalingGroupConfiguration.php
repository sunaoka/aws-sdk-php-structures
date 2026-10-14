<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetInfrastructureConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property int<0, 3600>|null $capacityWaitTimeoutSeconds
 */
class AutoScalingGroupConfiguration extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     capacityWaitTimeoutSeconds?: int<0, 3600>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

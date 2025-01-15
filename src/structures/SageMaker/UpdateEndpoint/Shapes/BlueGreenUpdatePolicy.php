<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TrafficRoutingConfig $TrafficRoutingConfiguration
 * @property int<0, 3600>|null $TerminationWaitInSeconds
 * @property int<600, 28800>|null $MaximumExecutionTimeoutInSeconds
 */
class BlueGreenUpdatePolicy extends Shape
{
    /**
     * @param array{
     *     TrafficRoutingConfiguration: TrafficRoutingConfig,
     *     TerminationWaitInSeconds?: int<0, 3600>|null,
     *     MaximumExecutionTimeoutInSeconds?: int<600, 28800>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

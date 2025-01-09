<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TrafficRoutingConfig $TrafficRoutingConfiguration
 * @property int<0, 3600> $TerminationWaitInSeconds
 * @property int<600, 28800> $MaximumExecutionTimeoutInSeconds
 */
class BlueGreenUpdatePolicy extends Shape
{
    /**
     * @param array{
     *     TrafficRoutingConfiguration: TrafficRoutingConfig,
     *     TerminationWaitInSeconds?: int<0, 3600>,
     *     MaximumExecutionTimeoutInSeconds?: int<600, 28800>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

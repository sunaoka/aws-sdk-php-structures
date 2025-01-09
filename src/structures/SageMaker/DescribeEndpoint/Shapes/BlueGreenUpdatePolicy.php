<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TrafficRoutingConfig $TrafficRoutingConfiguration
 * @property int $TerminationWaitInSeconds
 * @property int $MaximumExecutionTimeoutInSeconds
 */
class BlueGreenUpdatePolicy extends Shape
{
    /**
     * @param array{
     *     TrafficRoutingConfiguration: TrafficRoutingConfig,
     *     TerminationWaitInSeconds?: int,
     *     MaximumExecutionTimeoutInSeconds?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

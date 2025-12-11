<?php

namespace Sunaoka\Aws\Structures\Ecs\CreateExpressGatewayService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $minTaskCount
 * @property int|null $maxTaskCount
 * @property 'AVERAGE_CPU'|'AVERAGE_MEMORY'|'REQUEST_COUNT_PER_TARGET'|null $autoScalingMetric
 * @property int|null $autoScalingTargetValue
 */
class ExpressGatewayScalingTarget extends Shape
{
    /**
     * @param array{
     *     minTaskCount?: int|null,
     *     maxTaskCount?: int|null,
     *     autoScalingMetric?: 'AVERAGE_CPU'|'AVERAGE_MEMORY'|'REQUEST_COUNT_PER_TARGET'|null,
     *     autoScalingTargetValue?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

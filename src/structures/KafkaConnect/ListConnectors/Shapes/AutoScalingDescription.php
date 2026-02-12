<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\ListConnectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $maxWorkerCount
 * @property int|null $mcuCount
 * @property int|null $minWorkerCount
 * @property ScaleInPolicyDescription|null $scaleInPolicy
 * @property ScaleOutPolicyDescription|null $scaleOutPolicy
 * @property int|null $maxAutoscalingTaskCount
 */
class AutoScalingDescription extends Shape
{
    /**
     * @param array{
     *     maxWorkerCount?: int|null,
     *     mcuCount?: int|null,
     *     minWorkerCount?: int|null,
     *     scaleInPolicy?: ScaleInPolicyDescription|null,
     *     scaleOutPolicy?: ScaleOutPolicyDescription|null,
     *     maxAutoscalingTaskCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

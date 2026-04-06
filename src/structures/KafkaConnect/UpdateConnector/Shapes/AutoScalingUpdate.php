<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\UpdateConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $maxWorkerCount
 * @property int<1, 8> $mcuCount
 * @property int $minWorkerCount
 * @property ScaleInPolicyUpdate $scaleInPolicy
 * @property ScaleOutPolicyUpdate $scaleOutPolicy
 * @property int|null $maxAutoscalingTaskCount
 */
class AutoScalingUpdate extends Shape
{
    /**
     * @param array{
     *     maxWorkerCount: int,
     *     mcuCount: int<1, 8>,
     *     minWorkerCount: int,
     *     scaleInPolicy: ScaleInPolicyUpdate,
     *     scaleOutPolicy: ScaleOutPolicyUpdate,
     *     maxAutoscalingTaskCount?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

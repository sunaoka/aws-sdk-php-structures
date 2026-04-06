<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\UpdateConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 10> $maxWorkerCount
 * @property int<1, 8> $mcuCount
 * @property int<1, 10> $minWorkerCount
 * @property ScaleInPolicyUpdate $scaleInPolicy
 * @property ScaleOutPolicyUpdate $scaleOutPolicy
 */
class AutoScalingUpdate extends Shape
{
    /**
     * @param array{
     *     maxWorkerCount: int<1, 10>,
     *     mcuCount: int<1, 8>,
     *     minWorkerCount: int<1, 10>,
     *     scaleInPolicy: ScaleInPolicyUpdate,
     *     scaleOutPolicy: ScaleOutPolicyUpdate
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

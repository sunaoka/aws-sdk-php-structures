<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\ListConnectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $maxWorkerCount
 * @property int $mcuCount
 * @property int $minWorkerCount
 * @property ScaleInPolicyDescription $scaleInPolicy
 * @property ScaleOutPolicyDescription $scaleOutPolicy
 */
class AutoScalingDescription extends Shape
{
    /**
     * @param array{
     *     maxWorkerCount?: int,
     *     mcuCount?: int,
     *     minWorkerCount?: int,
     *     scaleInPolicy?: ScaleInPolicyDescription,
     *     scaleOutPolicy?: ScaleOutPolicyDescription
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

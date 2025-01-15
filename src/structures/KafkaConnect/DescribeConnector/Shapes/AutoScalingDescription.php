<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\DescribeConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $maxWorkerCount
 * @property int|null $mcuCount
 * @property int|null $minWorkerCount
 * @property ScaleInPolicyDescription|null $scaleInPolicy
 * @property ScaleOutPolicyDescription|null $scaleOutPolicy
 */
class AutoScalingDescription extends Shape
{
    /**
     * @param array{
     *     maxWorkerCount?: int|null,
     *     mcuCount?: int|null,
     *     minWorkerCount?: int|null,
     *     scaleInPolicy?: ScaleInPolicyDescription|null,
     *     scaleOutPolicy?: ScaleOutPolicyDescription|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

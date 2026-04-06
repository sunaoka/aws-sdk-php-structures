<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\CreateConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $maxWorkerCount
 * @property int<1, 8> $mcuCount
 * @property int $minWorkerCount
 * @property ScaleInPolicy|null $scaleInPolicy
 * @property ScaleOutPolicy|null $scaleOutPolicy
 * @property int|null $maxAutoscalingTaskCount
 */
class AutoScaling extends Shape
{
    /**
     * @param array{
     *     maxWorkerCount: int,
     *     mcuCount: int<1, 8>,
     *     minWorkerCount: int,
     *     scaleInPolicy?: ScaleInPolicy|null,
     *     scaleOutPolicy?: ScaleOutPolicy|null,
     *     maxAutoscalingTaskCount?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

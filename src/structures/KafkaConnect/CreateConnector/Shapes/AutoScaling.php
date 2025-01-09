<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\CreateConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $maxWorkerCount
 * @property int $mcuCount
 * @property int $minWorkerCount
 * @property ScaleInPolicy $scaleInPolicy
 * @property ScaleOutPolicy $scaleOutPolicy
 */
class AutoScaling extends Shape
{
    /**
     * @param array{
     *     maxWorkerCount: int,
     *     mcuCount: int,
     *     minWorkerCount: int,
     *     scaleInPolicy?: ScaleInPolicy,
     *     scaleOutPolicy?: ScaleOutPolicy
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

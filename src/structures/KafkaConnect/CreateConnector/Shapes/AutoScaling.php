<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\CreateConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 10> $maxWorkerCount
 * @property int<1, 8> $mcuCount
 * @property int<1, 10> $minWorkerCount
 * @property ScaleInPolicy $scaleInPolicy
 * @property ScaleOutPolicy $scaleOutPolicy
 */
class AutoScaling extends Shape
{
    /**
     * @param array{
     *     maxWorkerCount: int<1, 10>,
     *     mcuCount: int<1, 8>,
     *     minWorkerCount: int<1, 10>,
     *     scaleInPolicy?: ScaleInPolicy,
     *     scaleOutPolicy?: ScaleOutPolicy
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

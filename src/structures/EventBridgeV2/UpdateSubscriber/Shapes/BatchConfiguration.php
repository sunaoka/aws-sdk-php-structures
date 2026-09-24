<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\UpdateSubscriber\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 500>|null $MaxBatchSize
 * @property int<0, 300>|null $MaxBatchWindowInSeconds
 */
class BatchConfiguration extends Shape
{
    /**
     * @param array{
     *     MaxBatchSize?: int<1, 500>|null,
     *     MaxBatchWindowInSeconds?: int<0, 300>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

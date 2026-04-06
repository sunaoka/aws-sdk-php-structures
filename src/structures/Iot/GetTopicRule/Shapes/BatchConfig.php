<?php

namespace Sunaoka\Aws\Structures\Iot\GetTopicRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<5, 200>|null $maxBatchOpenMs
 * @property int<2, 10>|null $maxBatchSize
 * @property int<100, 131072>|null $maxBatchSizeBytes
 */
class BatchConfig extends Shape
{
    /**
     * @param array{
     *     maxBatchOpenMs?: int<5, 200>|null,
     *     maxBatchSize?: int<2, 10>|null,
     *     maxBatchSizeBytes?: int<100, 131072>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

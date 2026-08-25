<?php

namespace Sunaoka\Aws\Structures\Iot\ReplaceTopicRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 500>|null $maxBatchSize
 * @property int<5, 1000>|null $maxBatchOpenMs
 * @property int<100, 131072>|null $maxBatchSizeBytes
 * @property bool|null $batchAcrossTopics
 */
class InfluxDBBatchConfig extends Shape
{
    /**
     * @param array{
     *     maxBatchSize?: int<1, 500>|null,
     *     maxBatchOpenMs?: int<5, 1000>|null,
     *     maxBatchSizeBytes?: int<100, 131072>|null,
     *     batchAcrossTopics?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

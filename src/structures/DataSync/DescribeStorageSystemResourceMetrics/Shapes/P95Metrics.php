<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeStorageSystemResourceMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IOPS|null $IOPS
 * @property Throughput|null $Throughput
 * @property Latency|null $Latency
 */
class P95Metrics extends Shape
{
    /**
     * @param array{
     *     IOPS?: IOPS|null,
     *     Throughput?: Throughput|null,
     *     Latency?: Latency|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

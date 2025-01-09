<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeStorageSystemResourceMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IOPS $IOPS
 * @property Throughput $Throughput
 * @property Latency $Latency
 */
class P95Metrics extends Shape
{
    /**
     * @param array{
     *     IOPS?: IOPS,
     *     Throughput?: Throughput,
     *     Latency?: Latency
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

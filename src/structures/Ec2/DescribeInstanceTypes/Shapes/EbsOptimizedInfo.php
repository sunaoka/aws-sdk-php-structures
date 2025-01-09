<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $BaselineBandwidthInMbps
 * @property double $BaselineThroughputInMBps
 * @property int $BaselineIops
 * @property int $MaximumBandwidthInMbps
 * @property double $MaximumThroughputInMBps
 * @property int $MaximumIops
 */
class EbsOptimizedInfo extends Shape
{
    /**
     * @param array{
     *     BaselineBandwidthInMbps?: int,
     *     BaselineThroughputInMBps?: double,
     *     BaselineIops?: int,
     *     MaximumBandwidthInMbps?: int,
     *     MaximumThroughputInMBps?: double,
     *     MaximumIops?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $BaselineBandwidthInMbps
 * @property double|null $BaselineThroughputInMBps
 * @property int|null $BaselineIops
 * @property int|null $MaximumBandwidthInMbps
 * @property double|null $MaximumThroughputInMBps
 * @property int|null $MaximumIops
 */
class EbsOptimizedInfo extends Shape
{
    /**
     * @param array{
     *     BaselineBandwidthInMbps?: int|null,
     *     BaselineThroughputInMBps?: double|null,
     *     BaselineIops?: int|null,
     *     MaximumBandwidthInMbps?: int|null,
     *     MaximumThroughputInMBps?: double|null,
     *     MaximumIops?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

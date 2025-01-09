<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $NetworkCardIndex
 * @property string $NetworkPerformance
 * @property int $MaximumNetworkInterfaces
 * @property double $BaselineBandwidthInGbps
 * @property double $PeakBandwidthInGbps
 */
class NetworkCardInfo extends Shape
{
    /**
     * @param array{
     *     NetworkCardIndex?: int,
     *     NetworkPerformance?: string,
     *     MaximumNetworkInterfaces?: int,
     *     BaselineBandwidthInGbps?: double,
     *     PeakBandwidthInGbps?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

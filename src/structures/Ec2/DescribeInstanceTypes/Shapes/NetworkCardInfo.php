<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $NetworkCardIndex
 * @property string|null $NetworkPerformance
 * @property int|null $MaximumNetworkInterfaces
 * @property double|null $BaselineBandwidthInGbps
 * @property double|null $PeakBandwidthInGbps
 */
class NetworkCardInfo extends Shape
{
    /**
     * @param array{
     *     NetworkCardIndex?: int|null,
     *     NetworkPerformance?: string|null,
     *     MaximumNetworkInterfaces?: int|null,
     *     BaselineBandwidthInGbps?: double|null,
     *     PeakBandwidthInGbps?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

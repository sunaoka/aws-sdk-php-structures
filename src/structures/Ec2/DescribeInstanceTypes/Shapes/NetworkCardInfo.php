<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $NetworkCardIndex
 * @property string|null $NetworkPerformance
 * @property int|null $MaximumNetworkInterfaces
 * @property int|null $AdditionalFlexibleNetworkInterfaces
 * @property double|null $BaselineBandwidthInGbps
 * @property double|null $PeakBandwidthInGbps
 * @property int|null $DefaultEnaQueueCountPerInterface
 * @property int|null $MaximumEnaQueueCount
 * @property int|null $MaximumEnaQueueCountPerInterface
 */
class NetworkCardInfo extends Shape
{
    /**
     * @param array{
     *     NetworkCardIndex?: int|null,
     *     NetworkPerformance?: string|null,
     *     MaximumNetworkInterfaces?: int|null,
     *     AdditionalFlexibleNetworkInterfaces?: int|null,
     *     BaselineBandwidthInGbps?: double|null,
     *     PeakBandwidthInGbps?: double|null,
     *     DefaultEnaQueueCountPerInterface?: int|null,
     *     MaximumEnaQueueCount?: int|null,
     *     MaximumEnaQueueCountPerInterface?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

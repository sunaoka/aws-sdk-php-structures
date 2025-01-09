<?php

namespace Sunaoka\Aws\Structures\Ec2\EnableAwsNetworkPerformanceMetricSubscription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Source
 * @property string $Destination
 * @property 'aggregate-latency' $Metric
 * @property 'p50' $Statistic
 * @property bool $DryRun
 */
class EnableAwsNetworkPerformanceMetricSubscriptionRequest extends Request
{
    /**
     * @param array{
     *     Source?: string,
     *     Destination?: string,
     *     Metric?: 'aggregate-latency',
     *     Statistic?: 'p50',
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

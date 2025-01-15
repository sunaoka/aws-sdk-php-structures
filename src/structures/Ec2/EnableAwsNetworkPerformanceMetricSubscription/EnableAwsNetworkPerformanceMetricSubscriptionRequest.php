<?php

namespace Sunaoka\Aws\Structures\Ec2\EnableAwsNetworkPerformanceMetricSubscription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Source
 * @property string|null $Destination
 * @property 'aggregate-latency'|null $Metric
 * @property 'p50'|null $Statistic
 * @property bool|null $DryRun
 */
class EnableAwsNetworkPerformanceMetricSubscriptionRequest extends Request
{
    /**
     * @param array{
     *     Source?: string|null,
     *     Destination?: string|null,
     *     Metric?: 'aggregate-latency'|null,
     *     Statistic?: 'p50'|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

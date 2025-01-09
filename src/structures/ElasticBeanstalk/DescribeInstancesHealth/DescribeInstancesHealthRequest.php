<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeInstancesHealth;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EnvironmentName
 * @property string $EnvironmentId
 * @property list<'HealthStatus'|'Color'|'Causes'|'ApplicationMetrics'|'RefreshedAt'|'LaunchedAt'|'System'|'Deployment'|'AvailabilityZone'|'InstanceType'|'All'> $AttributeNames
 * @property string $NextToken
 */
class DescribeInstancesHealthRequest extends Request
{
    /**
     * @param array{
     *     EnvironmentName?: string,
     *     EnvironmentId?: string,
     *     AttributeNames?: list<'HealthStatus'|'Color'|'Causes'|'ApplicationMetrics'|'RefreshedAt'|'LaunchedAt'|'System'|'Deployment'|'AvailabilityZone'|'InstanceType'|'All'>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeInstancesHealth;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $EnvironmentName
 * @property string|null $EnvironmentId
 * @property list<'HealthStatus'|'Color'|'Causes'|'ApplicationMetrics'|'RefreshedAt'|'LaunchedAt'|'System'|'Deployment'|'AvailabilityZone'|'InstanceType'|'All'>|null $AttributeNames
 * @property string|null $NextToken
 */
class DescribeInstancesHealthRequest extends Request
{
    /**
     * @param array{
     *     EnvironmentName?: string|null,
     *     EnvironmentId?: string|null,
     *     AttributeNames?: list<'HealthStatus'|'Color'|'Causes'|'ApplicationMetrics'|'RefreshedAt'|'LaunchedAt'|'System'|'Deployment'|'AvailabilityZone'|'InstanceType'|'All'>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

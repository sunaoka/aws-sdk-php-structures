<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeEnvironmentHealth;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EnvironmentName
 * @property string $EnvironmentId
 * @property list<'Status'|'Color'|'Causes'|'ApplicationMetrics'|'InstancesHealth'|'All'|'HealthStatus'|'RefreshedAt'> $AttributeNames
 */
class DescribeEnvironmentHealthRequest extends Request
{
    /**
     * @param array{
     *     EnvironmentName?: string,
     *     EnvironmentId?: string,
     *     AttributeNames?: list<'Status'|'Color'|'Causes'|'ApplicationMetrics'|'InstancesHealth'|'All'|'HealthStatus'|'RefreshedAt'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

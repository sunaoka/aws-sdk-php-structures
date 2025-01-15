<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeEnvironmentHealth;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $EnvironmentName
 * @property string|null $EnvironmentId
 * @property list<'Status'|'Color'|'Causes'|'ApplicationMetrics'|'InstancesHealth'|'All'|'HealthStatus'|'RefreshedAt'>|null $AttributeNames
 */
class DescribeEnvironmentHealthRequest extends Request
{
    /**
     * @param array{
     *     EnvironmentName?: string|null,
     *     EnvironmentId?: string|null,
     *     AttributeNames?: list<'Status'|'Color'|'Causes'|'ApplicationMetrics'|'InstancesHealth'|'All'|'HealthStatus'|'RefreshedAt'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

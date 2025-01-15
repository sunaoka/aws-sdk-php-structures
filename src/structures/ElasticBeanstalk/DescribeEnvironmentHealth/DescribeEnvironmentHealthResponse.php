<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeEnvironmentHealth;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $EnvironmentName
 * @property string|null $HealthStatus
 * @property 'Green'|'Yellow'|'Red'|'Grey'|null $Status
 * @property string|null $Color
 * @property list<string>|null $Causes
 * @property Shapes\ApplicationMetrics|null $ApplicationMetrics
 * @property Shapes\InstanceHealthSummary|null $InstancesHealth
 * @property \Aws\Api\DateTimeResult|null $RefreshedAt
 */
class DescribeEnvironmentHealthResponse extends Response
{
}

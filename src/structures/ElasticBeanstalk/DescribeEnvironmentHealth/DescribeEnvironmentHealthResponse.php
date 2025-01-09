<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeEnvironmentHealth;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $EnvironmentName
 * @property string $HealthStatus
 * @property 'Green'|'Yellow'|'Red'|'Grey' $Status
 * @property string $Color
 * @property list<string> $Causes
 * @property Shapes\ApplicationMetrics $ApplicationMetrics
 * @property Shapes\InstanceHealthSummary $InstancesHealth
 * @property \Aws\Api\DateTimeResult $RefreshedAt
 */
class DescribeEnvironmentHealthResponse extends Response
{
}

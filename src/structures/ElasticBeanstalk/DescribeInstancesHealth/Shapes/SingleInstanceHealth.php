<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeInstancesHealth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InstanceId
 * @property string|null $HealthStatus
 * @property string|null $Color
 * @property list<string>|null $Causes
 * @property \Aws\Api\DateTimeResult|null $LaunchedAt
 * @property ApplicationMetrics|null $ApplicationMetrics
 * @property SystemStatus|null $System
 * @property Deployment|null $Deployment
 * @property string|null $AvailabilityZone
 * @property string|null $InstanceType
 */
class SingleInstanceHealth extends Shape
{
    /**
     * @param array{
     *     InstanceId?: string|null,
     *     HealthStatus?: string|null,
     *     Color?: string|null,
     *     Causes?: list<string>|null,
     *     LaunchedAt?: \Aws\Api\DateTimeResult|null,
     *     ApplicationMetrics?: ApplicationMetrics|null,
     *     System?: SystemStatus|null,
     *     Deployment?: Deployment|null,
     *     AvailabilityZone?: string|null,
     *     InstanceType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

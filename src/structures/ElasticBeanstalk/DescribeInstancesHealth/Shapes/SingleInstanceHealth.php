<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeInstancesHealth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceId
 * @property string $HealthStatus
 * @property string $Color
 * @property list<string> $Causes
 * @property \Aws\Api\DateTimeResult $LaunchedAt
 * @property ApplicationMetrics $ApplicationMetrics
 * @property SystemStatus $System
 * @property Deployment $Deployment
 * @property string $AvailabilityZone
 * @property string $InstanceType
 */
class SingleInstanceHealth extends Shape
{
    /**
     * @param array{
     *     InstanceId?: string,
     *     HealthStatus?: string,
     *     Color?: string,
     *     Causes?: list<string>,
     *     LaunchedAt?: \Aws\Api\DateTimeResult,
     *     ApplicationMetrics?: ApplicationMetrics,
     *     System?: SystemStatus,
     *     Deployment?: Deployment,
     *     AvailabilityZone?: string,
     *     InstanceType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

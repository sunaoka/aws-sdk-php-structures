<?php

namespace Sunaoka\Aws\Structures\Route53\GetHealthCheck\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $CallerReference
 * @property LinkedService $LinkedService
 * @property HealthCheckConfig $HealthCheckConfig
 * @property int $HealthCheckVersion
 * @property CloudWatchAlarmConfiguration $CloudWatchAlarmConfiguration
 */
class HealthCheck extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     CallerReference: string,
     *     LinkedService?: LinkedService,
     *     HealthCheckConfig: HealthCheckConfig,
     *     HealthCheckVersion: int,
     *     CloudWatchAlarmConfiguration?: CloudWatchAlarmConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Route53\GetHealthCheck\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $CallerReference
 * @property LinkedService|null $LinkedService
 * @property HealthCheckConfig $HealthCheckConfig
 * @property int<1, max> $HealthCheckVersion
 * @property CloudWatchAlarmConfiguration|null $CloudWatchAlarmConfiguration
 */
class HealthCheck extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     CallerReference: string,
     *     LinkedService?: LinkedService|null,
     *     HealthCheckConfig: HealthCheckConfig,
     *     HealthCheckVersion: int<1, max>,
     *     CloudWatchAlarmConfiguration?: CloudWatchAlarmConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

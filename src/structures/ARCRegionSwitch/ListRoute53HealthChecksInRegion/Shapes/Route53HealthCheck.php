<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\ListRoute53HealthChecksInRegion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $hostedZoneId
 * @property string $recordName
 * @property string|null $healthCheckId
 * @property 'healthy'|'unhealthy'|'unknown'|null $status
 * @property string $region
 */
class Route53HealthCheck extends Shape
{
    /**
     * @param array{
     *     hostedZoneId: string,
     *     recordName: string,
     *     healthCheckId?: string|null,
     *     status?: 'healthy'|'unhealthy'|'unknown'|null,
     *     region: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

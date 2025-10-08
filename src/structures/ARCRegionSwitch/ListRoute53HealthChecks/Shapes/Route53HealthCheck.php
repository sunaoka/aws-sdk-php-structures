<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\ListRoute53HealthChecks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $hostedZoneId
 * @property string $recordName
 * @property string|null $healthCheckId
 * @property string $region
 */
class Route53HealthCheck extends Shape
{
    /**
     * @param array{
     *     hostedZoneId: string,
     *     recordName: string,
     *     healthCheckId?: string|null,
     *     region: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

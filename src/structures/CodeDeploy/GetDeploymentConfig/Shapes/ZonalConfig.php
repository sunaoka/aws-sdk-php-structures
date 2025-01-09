<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\GetDeploymentConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $firstZoneMonitorDurationInSeconds
 * @property int $monitorDurationInSeconds
 * @property MinimumHealthyHostsPerZone $minimumHealthyHostsPerZone
 */
class ZonalConfig extends Shape
{
    /**
     * @param array{
     *     firstZoneMonitorDurationInSeconds?: int,
     *     monitorDurationInSeconds?: int,
     *     minimumHealthyHostsPerZone?: MinimumHealthyHostsPerZone
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

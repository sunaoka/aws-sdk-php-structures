<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\CreateDeploymentConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $firstZoneMonitorDurationInSeconds
 * @property int|null $monitorDurationInSeconds
 * @property MinimumHealthyHostsPerZone|null $minimumHealthyHostsPerZone
 */
class ZonalConfig extends Shape
{
    /**
     * @param array{
     *     firstZoneMonitorDurationInSeconds?: int|null,
     *     monitorDurationInSeconds?: int|null,
     *     minimumHealthyHostsPerZone?: MinimumHealthyHostsPerZone|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

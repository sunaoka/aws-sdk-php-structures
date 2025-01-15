<?php

namespace Sunaoka\Aws\Structures\InternetMonitor\UpdateMonitor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MonitorName
 * @property list<string>|null $ResourcesToAdd
 * @property list<string>|null $ResourcesToRemove
 * @property 'PENDING'|'ACTIVE'|'INACTIVE'|'ERROR'|null $Status
 * @property string|null $ClientToken
 * @property int<1, 500000>|null $MaxCityNetworksToMonitor
 * @property Shapes\InternetMeasurementsLogDelivery|null $InternetMeasurementsLogDelivery
 * @property int<1, 100>|null $TrafficPercentageToMonitor
 * @property Shapes\HealthEventsConfig|null $HealthEventsConfig
 */
class UpdateMonitorRequest extends Request
{
    /**
     * @param array{
     *     MonitorName: string,
     *     ResourcesToAdd?: list<string>|null,
     *     ResourcesToRemove?: list<string>|null,
     *     Status?: 'PENDING'|'ACTIVE'|'INACTIVE'|'ERROR'|null,
     *     ClientToken?: string|null,
     *     MaxCityNetworksToMonitor?: int<1, 500000>|null,
     *     InternetMeasurementsLogDelivery?: Shapes\InternetMeasurementsLogDelivery|null,
     *     TrafficPercentageToMonitor?: int<1, 100>|null,
     *     HealthEventsConfig?: Shapes\HealthEventsConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

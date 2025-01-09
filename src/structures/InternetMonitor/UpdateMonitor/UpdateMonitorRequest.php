<?php

namespace Sunaoka\Aws\Structures\InternetMonitor\UpdateMonitor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MonitorName
 * @property list<string> $ResourcesToAdd
 * @property list<string> $ResourcesToRemove
 * @property 'PENDING'|'ACTIVE'|'INACTIVE'|'ERROR' $Status
 * @property string $ClientToken
 * @property int<1, 500000> $MaxCityNetworksToMonitor
 * @property Shapes\InternetMeasurementsLogDelivery $InternetMeasurementsLogDelivery
 * @property int<1, 100> $TrafficPercentageToMonitor
 * @property Shapes\HealthEventsConfig $HealthEventsConfig
 */
class UpdateMonitorRequest extends Request
{
    /**
     * @param array{
     *     MonitorName: string,
     *     ResourcesToAdd?: list<string>,
     *     ResourcesToRemove?: list<string>,
     *     Status?: 'PENDING'|'ACTIVE'|'INACTIVE'|'ERROR',
     *     ClientToken?: string,
     *     MaxCityNetworksToMonitor?: int<1, 500000>,
     *     InternetMeasurementsLogDelivery?: Shapes\InternetMeasurementsLogDelivery,
     *     TrafficPercentageToMonitor?: int<1, 100>,
     *     HealthEventsConfig?: Shapes\HealthEventsConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

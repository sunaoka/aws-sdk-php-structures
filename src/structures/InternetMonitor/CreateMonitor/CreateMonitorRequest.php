<?php

namespace Sunaoka\Aws\Structures\InternetMonitor\CreateMonitor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MonitorName
 * @property list<string> $Resources
 * @property string $ClientToken
 * @property array<string, string> $Tags
 * @property int $MaxCityNetworksToMonitor
 * @property Shapes\InternetMeasurementsLogDelivery $InternetMeasurementsLogDelivery
 * @property int $TrafficPercentageToMonitor
 * @property Shapes\HealthEventsConfig $HealthEventsConfig
 */
class CreateMonitorRequest extends Request
{
    /**
     * @param array{
     *     MonitorName: string,
     *     Resources?: list<string>,
     *     ClientToken?: string,
     *     Tags?: array<string, string>,
     *     MaxCityNetworksToMonitor?: int,
     *     InternetMeasurementsLogDelivery?: Shapes\InternetMeasurementsLogDelivery,
     *     TrafficPercentageToMonitor?: int,
     *     HealthEventsConfig?: Shapes\HealthEventsConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

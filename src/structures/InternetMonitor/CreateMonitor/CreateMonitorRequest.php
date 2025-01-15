<?php

namespace Sunaoka\Aws\Structures\InternetMonitor\CreateMonitor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MonitorName
 * @property list<string>|null $Resources
 * @property string|null $ClientToken
 * @property array<string, string>|null $Tags
 * @property int<1, 500000>|null $MaxCityNetworksToMonitor
 * @property Shapes\InternetMeasurementsLogDelivery|null $InternetMeasurementsLogDelivery
 * @property int<1, 100>|null $TrafficPercentageToMonitor
 * @property Shapes\HealthEventsConfig|null $HealthEventsConfig
 */
class CreateMonitorRequest extends Request
{
    /**
     * @param array{
     *     MonitorName: string,
     *     Resources?: list<string>|null,
     *     ClientToken?: string|null,
     *     Tags?: array<string, string>|null,
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

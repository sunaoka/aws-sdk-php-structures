<?php

namespace Sunaoka\Aws\Structures\InternetMonitor\CreateMonitor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MonitorName
 * @property list<string> $Resources
 * @property string $ClientToken
 * @property array<string, string> $Tags
 * @property int<1, 500000> $MaxCityNetworksToMonitor
 * @property Shapes\InternetMeasurementsLogDelivery $InternetMeasurementsLogDelivery
 * @property int<1, 100> $TrafficPercentageToMonitor
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

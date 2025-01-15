<?php

namespace Sunaoka\Aws\Structures\InternetMonitor\GetMonitor;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $MonitorName
 * @property string $MonitorArn
 * @property list<string> $Resources
 * @property 'PENDING'|'ACTIVE'|'INACTIVE'|'ERROR' $Status
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $ModifiedAt
 * @property 'OK'|'INACTIVE'|'COLLECTING_DATA'|'INSUFFICIENT_DATA'|'FAULT_SERVICE'|'FAULT_ACCESS_CLOUDWATCH'|null $ProcessingStatus
 * @property string|null $ProcessingStatusInfo
 * @property array<string, string>|null $Tags
 * @property int<1, 500000>|null $MaxCityNetworksToMonitor
 * @property Shapes\InternetMeasurementsLogDelivery|null $InternetMeasurementsLogDelivery
 * @property int<1, 100>|null $TrafficPercentageToMonitor
 * @property Shapes\HealthEventsConfig|null $HealthEventsConfig
 */
class GetMonitorResponse extends Response
{
}

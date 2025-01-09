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
 * @property 'OK'|'INACTIVE'|'COLLECTING_DATA'|'INSUFFICIENT_DATA'|'FAULT_SERVICE'|'FAULT_ACCESS_CLOUDWATCH' $ProcessingStatus
 * @property string $ProcessingStatusInfo
 * @property array<string, string> $Tags
 * @property int<1, 500000> $MaxCityNetworksToMonitor
 * @property Shapes\InternetMeasurementsLogDelivery $InternetMeasurementsLogDelivery
 * @property int<1, 100> $TrafficPercentageToMonitor
 * @property Shapes\HealthEventsConfig $HealthEventsConfig
 */
class GetMonitorResponse extends Response
{
}

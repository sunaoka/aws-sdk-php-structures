<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $QueryId
 * @property 'DeviceRSSI'|'DeviceSNR'|'DeviceRoamingRSSI'|'DeviceRoamingSNR'|'DeviceUplinkCount'|'DeviceDownlinkCount'|'DeviceUplinkLostCount'|'DeviceUplinkLostRate'|'DeviceJoinRequestCount'|'DeviceJoinAcceptCount'|'DeviceRoamingUplinkCount'|'DeviceRoamingDownlinkCount'|'GatewayUpTime'|'GatewayDownTime'|'GatewayRSSI'|'GatewaySNR'|'GatewayUplinkCount'|'GatewayDownlinkCount'|'GatewayJoinRequestCount'|'GatewayJoinAcceptCount'|'AwsAccountUplinkCount'|'AwsAccountDownlinkCount'|'AwsAccountUplinkLostCount'|'AwsAccountUplinkLostRate'|'AwsAccountJoinRequestCount'|'AwsAccountJoinAcceptCount'|'AwsAccountRoamingUplinkCount'|'AwsAccountRoamingDownlinkCount'|'AwsAccountDeviceCount'|'AwsAccountGatewayCount'|'AwsAccountActiveDeviceCount'|'AwsAccountActiveGatewayCount'|null $MetricName
 * @property list<Dimension>|null $Dimensions
 * @property 'OneHour'|'OneDay'|'OneWeek'|null $AggregationPeriod
 * @property \Aws\Api\DateTimeResult|null $StartTimestamp
 * @property \Aws\Api\DateTimeResult|null $EndTimestamp
 */
class SummaryMetricQuery extends Shape
{
    /**
     * @param array{
     *     QueryId?: string|null,
     *     MetricName?: 'DeviceRSSI'|'DeviceSNR'|'DeviceRoamingRSSI'|'DeviceRoamingSNR'|'DeviceUplinkCount'|'DeviceDownlinkCount'|'DeviceUplinkLostCount'|'DeviceUplinkLostRate'|'DeviceJoinRequestCount'|'DeviceJoinAcceptCount'|'DeviceRoamingUplinkCount'|'DeviceRoamingDownlinkCount'|'GatewayUpTime'|'GatewayDownTime'|'GatewayRSSI'|'GatewaySNR'|'GatewayUplinkCount'|'GatewayDownlinkCount'|'GatewayJoinRequestCount'|'GatewayJoinAcceptCount'|'AwsAccountUplinkCount'|'AwsAccountDownlinkCount'|'AwsAccountUplinkLostCount'|'AwsAccountUplinkLostRate'|'AwsAccountJoinRequestCount'|'AwsAccountJoinAcceptCount'|'AwsAccountRoamingUplinkCount'|'AwsAccountRoamingDownlinkCount'|'AwsAccountDeviceCount'|'AwsAccountGatewayCount'|'AwsAccountActiveDeviceCount'|'AwsAccountActiveGatewayCount'|null,
     *     Dimensions?: list<Dimension>|null,
     *     AggregationPeriod?: 'OneHour'|'OneDay'|'OneWeek'|null,
     *     StartTimestamp?: \Aws\Api\DateTimeResult|null,
     *     EndTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

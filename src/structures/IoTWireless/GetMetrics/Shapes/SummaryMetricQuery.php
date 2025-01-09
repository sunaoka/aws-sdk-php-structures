<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $QueryId
 * @property 'DeviceRSSI'|'DeviceSNR'|'DeviceRoamingRSSI'|'DeviceRoamingSNR'|'DeviceUplinkCount'|'DeviceDownlinkCount'|'DeviceUplinkLostCount'|'DeviceUplinkLostRate'|'DeviceJoinRequestCount'|'DeviceJoinAcceptCount'|'DeviceRoamingUplinkCount'|'DeviceRoamingDownlinkCount'|'GatewayUpTime'|'GatewayDownTime'|'GatewayRSSI'|'GatewaySNR'|'GatewayUplinkCount'|'GatewayDownlinkCount'|'GatewayJoinRequestCount'|'GatewayJoinAcceptCount'|'AwsAccountUplinkCount'|'AwsAccountDownlinkCount'|'AwsAccountUplinkLostCount'|'AwsAccountUplinkLostRate'|'AwsAccountJoinRequestCount'|'AwsAccountJoinAcceptCount'|'AwsAccountRoamingUplinkCount'|'AwsAccountRoamingDownlinkCount'|'AwsAccountDeviceCount'|'AwsAccountGatewayCount'|'AwsAccountActiveDeviceCount'|'AwsAccountActiveGatewayCount' $MetricName
 * @property list<Dimension> $Dimensions
 * @property 'OneHour'|'OneDay'|'OneWeek' $AggregationPeriod
 * @property \Aws\Api\DateTimeResult $StartTimestamp
 * @property \Aws\Api\DateTimeResult $EndTimestamp
 */
class SummaryMetricQuery extends Shape
{
    /**
     * @param array{
     *     QueryId?: string,
     *     MetricName?: 'DeviceRSSI'|'DeviceSNR'|'DeviceRoamingRSSI'|'DeviceRoamingSNR'|'DeviceUplinkCount'|'DeviceDownlinkCount'|'DeviceUplinkLostCount'|'DeviceUplinkLostRate'|'DeviceJoinRequestCount'|'DeviceJoinAcceptCount'|'DeviceRoamingUplinkCount'|'DeviceRoamingDownlinkCount'|'GatewayUpTime'|'GatewayDownTime'|'GatewayRSSI'|'GatewaySNR'|'GatewayUplinkCount'|'GatewayDownlinkCount'|'GatewayJoinRequestCount'|'GatewayJoinAcceptCount'|'AwsAccountUplinkCount'|'AwsAccountDownlinkCount'|'AwsAccountUplinkLostCount'|'AwsAccountUplinkLostRate'|'AwsAccountJoinRequestCount'|'AwsAccountJoinAcceptCount'|'AwsAccountRoamingUplinkCount'|'AwsAccountRoamingDownlinkCount'|'AwsAccountDeviceCount'|'AwsAccountGatewayCount'|'AwsAccountActiveDeviceCount'|'AwsAccountActiveGatewayCount',
     *     Dimensions?: list<Dimension>,
     *     AggregationPeriod?: 'OneHour'|'OneDay'|'OneWeek',
     *     StartTimestamp?: \Aws\Api\DateTimeResult,
     *     EndTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

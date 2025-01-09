<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $QueryId
 * @property 'Succeeded'|'Failed' $QueryStatus
 * @property string $Error
 * @property 'DeviceRSSI'|'DeviceSNR'|'DeviceRoamingRSSI'|'DeviceRoamingSNR'|'DeviceUplinkCount'|'DeviceDownlinkCount'|'DeviceUplinkLostCount'|'DeviceUplinkLostRate'|'DeviceJoinRequestCount'|'DeviceJoinAcceptCount'|'DeviceRoamingUplinkCount'|'DeviceRoamingDownlinkCount'|'GatewayUpTime'|'GatewayDownTime'|'GatewayRSSI'|'GatewaySNR'|'GatewayUplinkCount'|'GatewayDownlinkCount'|'GatewayJoinRequestCount'|'GatewayJoinAcceptCount'|'AwsAccountUplinkCount'|'AwsAccountDownlinkCount'|'AwsAccountUplinkLostCount'|'AwsAccountUplinkLostRate'|'AwsAccountJoinRequestCount'|'AwsAccountJoinAcceptCount'|'AwsAccountRoamingUplinkCount'|'AwsAccountRoamingDownlinkCount'|'AwsAccountDeviceCount'|'AwsAccountGatewayCount'|'AwsAccountActiveDeviceCount'|'AwsAccountActiveGatewayCount' $MetricName
 * @property list<Dimension> $Dimensions
 * @property 'OneHour'|'OneDay'|'OneWeek' $AggregationPeriod
 * @property \Aws\Api\DateTimeResult $StartTimestamp
 * @property \Aws\Api\DateTimeResult $EndTimestamp
 * @property list<\Aws\Api\DateTimeResult> $Timestamps
 * @property list<MetricQueryValue> $Values
 * @property string $Unit
 */
class SummaryMetricQueryResult extends Shape
{
    /**
     * @param array{
     *     QueryId?: string,
     *     QueryStatus?: 'Succeeded'|'Failed',
     *     Error?: string,
     *     MetricName?: 'DeviceRSSI'|'DeviceSNR'|'DeviceRoamingRSSI'|'DeviceRoamingSNR'|'DeviceUplinkCount'|'DeviceDownlinkCount'|'DeviceUplinkLostCount'|'DeviceUplinkLostRate'|'DeviceJoinRequestCount'|'DeviceJoinAcceptCount'|'DeviceRoamingUplinkCount'|'DeviceRoamingDownlinkCount'|'GatewayUpTime'|'GatewayDownTime'|'GatewayRSSI'|'GatewaySNR'|'GatewayUplinkCount'|'GatewayDownlinkCount'|'GatewayJoinRequestCount'|'GatewayJoinAcceptCount'|'AwsAccountUplinkCount'|'AwsAccountDownlinkCount'|'AwsAccountUplinkLostCount'|'AwsAccountUplinkLostRate'|'AwsAccountJoinRequestCount'|'AwsAccountJoinAcceptCount'|'AwsAccountRoamingUplinkCount'|'AwsAccountRoamingDownlinkCount'|'AwsAccountDeviceCount'|'AwsAccountGatewayCount'|'AwsAccountActiveDeviceCount'|'AwsAccountActiveGatewayCount',
     *     Dimensions?: list<Dimension>,
     *     AggregationPeriod?: 'OneHour'|'OneDay'|'OneWeek',
     *     StartTimestamp?: \Aws\Api\DateTimeResult,
     *     EndTimestamp?: \Aws\Api\DateTimeResult,
     *     Timestamps?: list<\Aws\Api\DateTimeResult>,
     *     Values?: list<MetricQueryValue>,
     *     Unit?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $QueryId
 * @property 'Succeeded'|'Failed'|null $QueryStatus
 * @property string|null $Error
 * @property 'DeviceRSSI'|'DeviceSNR'|'DeviceRoamingRSSI'|'DeviceRoamingSNR'|'DeviceUplinkCount'|'DeviceDownlinkCount'|'DeviceUplinkLostCount'|'DeviceUplinkLostRate'|'DeviceJoinRequestCount'|'DeviceJoinAcceptCount'|'DeviceRoamingUplinkCount'|'DeviceRoamingDownlinkCount'|'GatewayUpTime'|'GatewayDownTime'|'GatewayRSSI'|'GatewaySNR'|'GatewayUplinkCount'|'GatewayDownlinkCount'|'GatewayJoinRequestCount'|'GatewayJoinAcceptCount'|'AwsAccountUplinkCount'|'AwsAccountDownlinkCount'|'AwsAccountUplinkLostCount'|'AwsAccountUplinkLostRate'|'AwsAccountJoinRequestCount'|'AwsAccountJoinAcceptCount'|'AwsAccountRoamingUplinkCount'|'AwsAccountRoamingDownlinkCount'|'AwsAccountDeviceCount'|'AwsAccountGatewayCount'|'AwsAccountActiveDeviceCount'|'AwsAccountActiveGatewayCount'|null $MetricName
 * @property list<Dimension>|null $Dimensions
 * @property 'OneHour'|'OneDay'|'OneWeek'|null $AggregationPeriod
 * @property \Aws\Api\DateTimeResult|null $StartTimestamp
 * @property \Aws\Api\DateTimeResult|null $EndTimestamp
 * @property list<\Aws\Api\DateTimeResult>|null $Timestamps
 * @property list<MetricQueryValue>|null $Values
 * @property string|null $Unit
 */
class SummaryMetricQueryResult extends Shape
{
    /**
     * @param array{
     *     QueryId?: string|null,
     *     QueryStatus?: 'Succeeded'|'Failed'|null,
     *     Error?: string|null,
     *     MetricName?: 'DeviceRSSI'|'DeviceSNR'|'DeviceRoamingRSSI'|'DeviceRoamingSNR'|'DeviceUplinkCount'|'DeviceDownlinkCount'|'DeviceUplinkLostCount'|'DeviceUplinkLostRate'|'DeviceJoinRequestCount'|'DeviceJoinAcceptCount'|'DeviceRoamingUplinkCount'|'DeviceRoamingDownlinkCount'|'GatewayUpTime'|'GatewayDownTime'|'GatewayRSSI'|'GatewaySNR'|'GatewayUplinkCount'|'GatewayDownlinkCount'|'GatewayJoinRequestCount'|'GatewayJoinAcceptCount'|'AwsAccountUplinkCount'|'AwsAccountDownlinkCount'|'AwsAccountUplinkLostCount'|'AwsAccountUplinkLostRate'|'AwsAccountJoinRequestCount'|'AwsAccountJoinAcceptCount'|'AwsAccountRoamingUplinkCount'|'AwsAccountRoamingDownlinkCount'|'AwsAccountDeviceCount'|'AwsAccountGatewayCount'|'AwsAccountActiveDeviceCount'|'AwsAccountActiveGatewayCount'|null,
     *     Dimensions?: list<Dimension>|null,
     *     AggregationPeriod?: 'OneHour'|'OneDay'|'OneWeek'|null,
     *     StartTimestamp?: \Aws\Api\DateTimeResult|null,
     *     EndTimestamp?: \Aws\Api\DateTimeResult|null,
     *     Timestamps?: list<\Aws\Api\DateTimeResult>|null,
     *     Values?: list<MetricQueryValue>|null,
     *     Unit?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

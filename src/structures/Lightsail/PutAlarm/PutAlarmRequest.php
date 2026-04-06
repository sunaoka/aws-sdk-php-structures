<?php

namespace Sunaoka\Aws\Structures\Lightsail\PutAlarm;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $alarmName
 * @property 'CPUUtilization'|'NetworkIn'|'NetworkOut'|'StatusCheckFailed'|'StatusCheckFailed_Instance'|'StatusCheckFailed_System'|'ClientTLSNegotiationErrorCount'|'HealthyHostCount'|'UnhealthyHostCount'|'HTTPCode_LB_4XX_Count'|'HTTPCode_LB_5XX_Count'|'HTTPCode_Instance_2XX_Count'|'HTTPCode_Instance_3XX_Count'|'HTTPCode_Instance_4XX_Count'|'HTTPCode_Instance_5XX_Count'|'InstanceResponseTime'|'RejectedConnectionCount'|'RequestCount'|'DatabaseConnections'|'DiskQueueDepth'|'FreeStorageSpace'|'NetworkReceiveThroughput'|'NetworkTransmitThroughput'|'BurstCapacityTime'|'BurstCapacityPercentage' $metricName
 * @property string $monitoredResourceName
 * @property 'GreaterThanOrEqualToThreshold'|'GreaterThanThreshold'|'LessThanThreshold'|'LessThanOrEqualToThreshold' $comparisonOperator
 * @property double $threshold
 * @property int $evaluationPeriods
 * @property int|null $datapointsToAlarm
 * @property 'breaching'|'notBreaching'|'ignore'|'missing'|null $treatMissingData
 * @property list<'Email'|'SMS'>|null $contactProtocols
 * @property list<'OK'|'ALARM'|'INSUFFICIENT_DATA'>|null $notificationTriggers
 * @property bool|null $notificationEnabled
 */
class PutAlarmRequest extends Request
{
    /**
     * @param array{
     *     alarmName: string,
     *     metricName: 'CPUUtilization'|'NetworkIn'|'NetworkOut'|'StatusCheckFailed'|'StatusCheckFailed_Instance'|'StatusCheckFailed_System'|'ClientTLSNegotiationErrorCount'|'HealthyHostCount'|'UnhealthyHostCount'|'HTTPCode_LB_4XX_Count'|'HTTPCode_LB_5XX_Count'|'HTTPCode_Instance_2XX_Count'|'HTTPCode_Instance_3XX_Count'|'HTTPCode_Instance_4XX_Count'|'HTTPCode_Instance_5XX_Count'|'InstanceResponseTime'|'RejectedConnectionCount'|'RequestCount'|'DatabaseConnections'|'DiskQueueDepth'|'FreeStorageSpace'|'NetworkReceiveThroughput'|'NetworkTransmitThroughput'|'BurstCapacityTime'|'BurstCapacityPercentage',
     *     monitoredResourceName: string,
     *     comparisonOperator: 'GreaterThanOrEqualToThreshold'|'GreaterThanThreshold'|'LessThanThreshold'|'LessThanOrEqualToThreshold',
     *     threshold: double,
     *     evaluationPeriods: int,
     *     datapointsToAlarm?: int|null,
     *     treatMissingData?: 'breaching'|'notBreaching'|'ignore'|'missing'|null,
     *     contactProtocols?: list<'Email'|'SMS'>|null,
     *     notificationTriggers?: list<'OK'|'ALARM'|'INSUFFICIENT_DATA'>|null,
     *     notificationEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

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
 * @property int $datapointsToAlarm
 * @property 'breaching'|'notBreaching'|'ignore'|'missing' $treatMissingData
 * @property list<'Email'|'SMS'> $contactProtocols
 * @property list<'OK'|'ALARM'|'INSUFFICIENT_DATA'> $notificationTriggers
 * @property bool $notificationEnabled
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
     *     datapointsToAlarm?: int,
     *     treatMissingData?: 'breaching'|'notBreaching'|'ignore'|'missing',
     *     contactProtocols?: list<'Email'|'SMS'>,
     *     notificationTriggers?: list<'OK'|'ALARM'|'INSUFFICIENT_DATA'>,
     *     notificationEnabled?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

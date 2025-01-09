<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetAlarms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property ResourceLocation $location
 * @property 'ContainerService'|'Instance'|'StaticIp'|'KeyPair'|'InstanceSnapshot'|'Domain'|'PeeredVpc'|'LoadBalancer'|'LoadBalancerTlsCertificate'|'Disk'|'DiskSnapshot'|'RelationalDatabase'|'RelationalDatabaseSnapshot'|'ExportSnapshotRecord'|'CloudFormationStackRecord'|'Alarm'|'ContactMethod'|'Distribution'|'Certificate'|'Bucket' $resourceType
 * @property string $supportCode
 * @property MonitoredResourceInfo $monitoredResourceInfo
 * @property 'GreaterThanOrEqualToThreshold'|'GreaterThanThreshold'|'LessThanThreshold'|'LessThanOrEqualToThreshold' $comparisonOperator
 * @property int $evaluationPeriods
 * @property int $period
 * @property double $threshold
 * @property int $datapointsToAlarm
 * @property 'breaching'|'notBreaching'|'ignore'|'missing' $treatMissingData
 * @property 'Minimum'|'Maximum'|'Sum'|'Average'|'SampleCount' $statistic
 * @property 'CPUUtilization'|'NetworkIn'|'NetworkOut'|'StatusCheckFailed'|'StatusCheckFailed_Instance'|'StatusCheckFailed_System'|'ClientTLSNegotiationErrorCount'|'HealthyHostCount'|'UnhealthyHostCount'|'HTTPCode_LB_4XX_Count'|'HTTPCode_LB_5XX_Count'|'HTTPCode_Instance_2XX_Count'|'HTTPCode_Instance_3XX_Count'|'HTTPCode_Instance_4XX_Count'|'HTTPCode_Instance_5XX_Count'|'InstanceResponseTime'|'RejectedConnectionCount'|'RequestCount'|'DatabaseConnections'|'DiskQueueDepth'|'FreeStorageSpace'|'NetworkReceiveThroughput'|'NetworkTransmitThroughput'|'BurstCapacityTime'|'BurstCapacityPercentage' $metricName
 * @property 'OK'|'ALARM'|'INSUFFICIENT_DATA' $state
 * @property 'Seconds'|'Microseconds'|'Milliseconds'|'Bytes'|'Kilobytes'|'Megabytes'|'Gigabytes'|'Terabytes'|'Bits'|'Kilobits'|'Megabits'|'Gigabits'|'Terabits'|'Percent'|'Count'|'Bytes/Second'|'Kilobytes/Second'|'Megabytes/Second'|'Gigabytes/Second'|'Terabytes/Second'|'Bits/Second'|'Kilobits/Second'|'Megabits/Second'|'Gigabits/Second'|'Terabits/Second'|'Count/Second'|'None' $unit
 * @property list<'Email'|'SMS'> $contactProtocols
 * @property list<'OK'|'ALARM'|'INSUFFICIENT_DATA'> $notificationTriggers
 * @property bool $notificationEnabled
 */
class Alarm extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     arn?: string,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     location?: ResourceLocation,
     *     resourceType?: 'ContainerService'|'Instance'|'StaticIp'|'KeyPair'|'InstanceSnapshot'|'Domain'|'PeeredVpc'|'LoadBalancer'|'LoadBalancerTlsCertificate'|'Disk'|'DiskSnapshot'|'RelationalDatabase'|'RelationalDatabaseSnapshot'|'ExportSnapshotRecord'|'CloudFormationStackRecord'|'Alarm'|'ContactMethod'|'Distribution'|'Certificate'|'Bucket',
     *     supportCode?: string,
     *     monitoredResourceInfo?: MonitoredResourceInfo,
     *     comparisonOperator?: 'GreaterThanOrEqualToThreshold'|'GreaterThanThreshold'|'LessThanThreshold'|'LessThanOrEqualToThreshold',
     *     evaluationPeriods?: int,
     *     period?: int,
     *     threshold?: double,
     *     datapointsToAlarm?: int,
     *     treatMissingData?: 'breaching'|'notBreaching'|'ignore'|'missing',
     *     statistic?: 'Minimum'|'Maximum'|'Sum'|'Average'|'SampleCount',
     *     metricName?: 'CPUUtilization'|'NetworkIn'|'NetworkOut'|'StatusCheckFailed'|'StatusCheckFailed_Instance'|'StatusCheckFailed_System'|'ClientTLSNegotiationErrorCount'|'HealthyHostCount'|'UnhealthyHostCount'|'HTTPCode_LB_4XX_Count'|'HTTPCode_LB_5XX_Count'|'HTTPCode_Instance_2XX_Count'|'HTTPCode_Instance_3XX_Count'|'HTTPCode_Instance_4XX_Count'|'HTTPCode_Instance_5XX_Count'|'InstanceResponseTime'|'RejectedConnectionCount'|'RequestCount'|'DatabaseConnections'|'DiskQueueDepth'|'FreeStorageSpace'|'NetworkReceiveThroughput'|'NetworkTransmitThroughput'|'BurstCapacityTime'|'BurstCapacityPercentage',
     *     state?: 'OK'|'ALARM'|'INSUFFICIENT_DATA',
     *     unit?: 'Seconds'|'Microseconds'|'Milliseconds'|'Bytes'|'Kilobytes'|'Megabytes'|'Gigabytes'|'Terabytes'|'Bits'|'Kilobits'|'Megabits'|'Gigabits'|'Terabits'|'Percent'|'Count'|'Bytes/Second'|'Kilobytes/Second'|'Megabytes/Second'|'Gigabytes/Second'|'Terabytes/Second'|'Bits/Second'|'Kilobits/Second'|'Megabits/Second'|'Gigabits/Second'|'Terabits/Second'|'Count/Second'|'None',
     *     contactProtocols?: list<'Email'|'SMS'>,
     *     notificationTriggers?: list<'OK'|'ALARM'|'INSUFFICIENT_DATA'>,
     *     notificationEnabled?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

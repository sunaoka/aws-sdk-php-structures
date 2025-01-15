<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights\DescribeObservation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property string|null $SourceType
 * @property string|null $SourceARN
 * @property string|null $LogGroup
 * @property \Aws\Api\DateTimeResult|null $LineTime
 * @property string|null $LogText
 * @property 'ERROR'|'WARN'|'INFO'|null $LogFilter
 * @property string|null $MetricNamespace
 * @property string|null $MetricName
 * @property string|null $Unit
 * @property double|null $Value
 * @property string|null $CloudWatchEventId
 * @property 'EC2'|'CODE_DEPLOY'|'HEALTH'|'RDS'|null $CloudWatchEventSource
 * @property string|null $CloudWatchEventDetailType
 * @property string|null $HealthEventArn
 * @property string|null $HealthService
 * @property string|null $HealthEventTypeCode
 * @property string|null $HealthEventTypeCategory
 * @property string|null $HealthEventDescription
 * @property string|null $CodeDeployDeploymentId
 * @property string|null $CodeDeployDeploymentGroup
 * @property string|null $CodeDeployState
 * @property string|null $CodeDeployApplication
 * @property string|null $CodeDeployInstanceGroupId
 * @property string|null $Ec2State
 * @property string|null $RdsEventCategories
 * @property string|null $RdsEventMessage
 * @property string|null $S3EventName
 * @property string|null $StatesExecutionArn
 * @property string|null $StatesArn
 * @property string|null $StatesStatus
 * @property string|null $StatesInput
 * @property string|null $EbsEvent
 * @property string|null $EbsResult
 * @property string|null $EbsCause
 * @property string|null $EbsRequestId
 * @property int|null $XRayFaultPercent
 * @property int|null $XRayThrottlePercent
 * @property int|null $XRayErrorPercent
 * @property int|null $XRayRequestCount
 * @property int|null $XRayRequestAverageLatency
 * @property string|null $XRayNodeName
 * @property string|null $XRayNodeType
 */
class Observation extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     SourceType?: string|null,
     *     SourceARN?: string|null,
     *     LogGroup?: string|null,
     *     LineTime?: \Aws\Api\DateTimeResult|null,
     *     LogText?: string|null,
     *     LogFilter?: 'ERROR'|'WARN'|'INFO'|null,
     *     MetricNamespace?: string|null,
     *     MetricName?: string|null,
     *     Unit?: string|null,
     *     Value?: double|null,
     *     CloudWatchEventId?: string|null,
     *     CloudWatchEventSource?: 'EC2'|'CODE_DEPLOY'|'HEALTH'|'RDS'|null,
     *     CloudWatchEventDetailType?: string|null,
     *     HealthEventArn?: string|null,
     *     HealthService?: string|null,
     *     HealthEventTypeCode?: string|null,
     *     HealthEventTypeCategory?: string|null,
     *     HealthEventDescription?: string|null,
     *     CodeDeployDeploymentId?: string|null,
     *     CodeDeployDeploymentGroup?: string|null,
     *     CodeDeployState?: string|null,
     *     CodeDeployApplication?: string|null,
     *     CodeDeployInstanceGroupId?: string|null,
     *     Ec2State?: string|null,
     *     RdsEventCategories?: string|null,
     *     RdsEventMessage?: string|null,
     *     S3EventName?: string|null,
     *     StatesExecutionArn?: string|null,
     *     StatesArn?: string|null,
     *     StatesStatus?: string|null,
     *     StatesInput?: string|null,
     *     EbsEvent?: string|null,
     *     EbsResult?: string|null,
     *     EbsCause?: string|null,
     *     EbsRequestId?: string|null,
     *     XRayFaultPercent?: int|null,
     *     XRayThrottlePercent?: int|null,
     *     XRayErrorPercent?: int|null,
     *     XRayRequestCount?: int|null,
     *     XRayRequestAverageLatency?: int|null,
     *     XRayNodeName?: string|null,
     *     XRayNodeType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

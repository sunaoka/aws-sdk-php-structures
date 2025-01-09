<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights\DescribeProblemObservations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property string $SourceType
 * @property string $SourceARN
 * @property string $LogGroup
 * @property \Aws\Api\DateTimeResult $LineTime
 * @property string $LogText
 * @property 'ERROR'|'WARN'|'INFO' $LogFilter
 * @property string $MetricNamespace
 * @property string $MetricName
 * @property string $Unit
 * @property double $Value
 * @property string $CloudWatchEventId
 * @property 'EC2'|'CODE_DEPLOY'|'HEALTH'|'RDS' $CloudWatchEventSource
 * @property string $CloudWatchEventDetailType
 * @property string $HealthEventArn
 * @property string $HealthService
 * @property string $HealthEventTypeCode
 * @property string $HealthEventTypeCategory
 * @property string $HealthEventDescription
 * @property string $CodeDeployDeploymentId
 * @property string $CodeDeployDeploymentGroup
 * @property string $CodeDeployState
 * @property string $CodeDeployApplication
 * @property string $CodeDeployInstanceGroupId
 * @property string $Ec2State
 * @property string $RdsEventCategories
 * @property string $RdsEventMessage
 * @property string $S3EventName
 * @property string $StatesExecutionArn
 * @property string $StatesArn
 * @property string $StatesStatus
 * @property string $StatesInput
 * @property string $EbsEvent
 * @property string $EbsResult
 * @property string $EbsCause
 * @property string $EbsRequestId
 * @property int $XRayFaultPercent
 * @property int $XRayThrottlePercent
 * @property int $XRayErrorPercent
 * @property int $XRayRequestCount
 * @property int $XRayRequestAverageLatency
 * @property string $XRayNodeName
 * @property string $XRayNodeType
 */
class Observation extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     SourceType?: string,
     *     SourceARN?: string,
     *     LogGroup?: string,
     *     LineTime?: \Aws\Api\DateTimeResult,
     *     LogText?: string,
     *     LogFilter?: 'ERROR'|'WARN'|'INFO',
     *     MetricNamespace?: string,
     *     MetricName?: string,
     *     Unit?: string,
     *     Value?: double,
     *     CloudWatchEventId?: string,
     *     CloudWatchEventSource?: 'EC2'|'CODE_DEPLOY'|'HEALTH'|'RDS',
     *     CloudWatchEventDetailType?: string,
     *     HealthEventArn?: string,
     *     HealthService?: string,
     *     HealthEventTypeCode?: string,
     *     HealthEventTypeCategory?: string,
     *     HealthEventDescription?: string,
     *     CodeDeployDeploymentId?: string,
     *     CodeDeployDeploymentGroup?: string,
     *     CodeDeployState?: string,
     *     CodeDeployApplication?: string,
     *     CodeDeployInstanceGroupId?: string,
     *     Ec2State?: string,
     *     RdsEventCategories?: string,
     *     RdsEventMessage?: string,
     *     S3EventName?: string,
     *     StatesExecutionArn?: string,
     *     StatesArn?: string,
     *     StatesStatus?: string,
     *     StatesInput?: string,
     *     EbsEvent?: string,
     *     EbsResult?: string,
     *     EbsCause?: string,
     *     EbsRequestId?: string,
     *     XRayFaultPercent?: int,
     *     XRayThrottlePercent?: int,
     *     XRayErrorPercent?: int,
     *     XRayRequestCount?: int,
     *     XRayRequestAverageLatency?: int,
     *     XRayNodeName?: string,
     *     XRayNodeType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

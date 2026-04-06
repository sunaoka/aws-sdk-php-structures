<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $Id
 * @property string|null $InitialContactId
 * @property string|null $PreviousContactId
 * @property 'INBOUND'|'OUTBOUND'|'TRANSFER'|'QUEUE_TRANSFER'|'CALLBACK'|'API'|'DISCONNECT'|'MONITOR'|'EXTERNAL_OUTBOUND'|null $InitiationMethod
 * @property string|null $Name
 * @property string|null $Description
 * @property 'VOICE'|'CHAT'|'TASK'|null $Channel
 * @property QueueInfo|null $QueueInfo
 * @property AgentInfo|null $AgentInfo
 * @property \Aws\Api\DateTimeResult|null $InitiationTimestamp
 * @property \Aws\Api\DateTimeResult|null $DisconnectTimestamp
 * @property \Aws\Api\DateTimeResult|null $LastUpdateTimestamp
 * @property \Aws\Api\DateTimeResult|null $LastPausedTimestamp
 * @property \Aws\Api\DateTimeResult|null $LastResumedTimestamp
 * @property int<0, 10>|null $TotalPauseCount
 * @property int<0, max>|null $TotalPauseDurationInSeconds
 * @property \Aws\Api\DateTimeResult|null $ScheduledTimestamp
 * @property string|null $RelatedContactId
 * @property WisdomInfo|null $WisdomInfo
 * @property int|null $QueueTimeAdjustmentSeconds
 * @property int<1, 9223372036854775807>|null $QueuePriority
 * @property array<string, string>|null $Tags
 * @property \Aws\Api\DateTimeResult|null $ConnectedToSystemTimestamp
 * @property RoutingCriteria|null $RoutingCriteria
 * @property Customer|null $Customer
 * @property Campaign|null $Campaign
 * @property 'ANSWERED'|'UNDETECTED'|'ERROR'|'HUMAN_ANSWERED'|'SIT_TONE_DETECTED'|'SIT_TONE_BUSY'|'SIT_TONE_INVALID_NUMBER'|'FAX_MACHINE_DETECTED'|'VOICEMAIL_BEEP'|'VOICEMAIL_NO_BEEP'|'AMD_UNRESOLVED'|'AMD_UNANSWERED'|'AMD_ERROR'|'AMD_NOT_APPLICABLE'|null $AnsweringMachineDetectionStatus
 * @property CustomerVoiceActivity|null $CustomerVoiceActivity
 * @property QualityMetrics|null $QualityMetrics
 * @property DisconnectDetails|null $DisconnectDetails
 * @property array<string, SegmentAttributeValue>|null $SegmentAttributes
 */
class Contact extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     Id?: string|null,
     *     InitialContactId?: string|null,
     *     PreviousContactId?: string|null,
     *     InitiationMethod?: 'INBOUND'|'OUTBOUND'|'TRANSFER'|'QUEUE_TRANSFER'|'CALLBACK'|'API'|'DISCONNECT'|'MONITOR'|'EXTERNAL_OUTBOUND'|null,
     *     Name?: string|null,
     *     Description?: string|null,
     *     Channel?: 'VOICE'|'CHAT'|'TASK'|null,
     *     QueueInfo?: QueueInfo|null,
     *     AgentInfo?: AgentInfo|null,
     *     InitiationTimestamp?: \Aws\Api\DateTimeResult|null,
     *     DisconnectTimestamp?: \Aws\Api\DateTimeResult|null,
     *     LastUpdateTimestamp?: \Aws\Api\DateTimeResult|null,
     *     LastPausedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     LastResumedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     TotalPauseCount?: int<0, 10>|null,
     *     TotalPauseDurationInSeconds?: int<0, max>|null,
     *     ScheduledTimestamp?: \Aws\Api\DateTimeResult|null,
     *     RelatedContactId?: string|null,
     *     WisdomInfo?: WisdomInfo|null,
     *     QueueTimeAdjustmentSeconds?: int|null,
     *     QueuePriority?: int<1, 9223372036854775807>|null,
     *     Tags?: array<string, string>|null,
     *     ConnectedToSystemTimestamp?: \Aws\Api\DateTimeResult|null,
     *     RoutingCriteria?: RoutingCriteria|null,
     *     Customer?: Customer|null,
     *     Campaign?: Campaign|null,
     *     AnsweringMachineDetectionStatus?: 'ANSWERED'|'UNDETECTED'|'ERROR'|'HUMAN_ANSWERED'|'SIT_TONE_DETECTED'|'SIT_TONE_BUSY'|'SIT_TONE_INVALID_NUMBER'|'FAX_MACHINE_DETECTED'|'VOICEMAIL_BEEP'|'VOICEMAIL_NO_BEEP'|'AMD_UNRESOLVED'|'AMD_UNANSWERED'|'AMD_ERROR'|'AMD_NOT_APPLICABLE'|null,
     *     CustomerVoiceActivity?: CustomerVoiceActivity|null,
     *     QualityMetrics?: QualityMetrics|null,
     *     DisconnectDetails?: DisconnectDetails|null,
     *     SegmentAttributes?: array<string, SegmentAttributeValue>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

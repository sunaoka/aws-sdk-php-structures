<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Id
 * @property string $InitialContactId
 * @property string $PreviousContactId
 * @property string $ContactAssociationId
 * @property 'INBOUND'|'OUTBOUND'|'TRANSFER'|'QUEUE_TRANSFER'|'CALLBACK'|'API'|'DISCONNECT'|'MONITOR'|'EXTERNAL_OUTBOUND'|'WEBRTC_API'|'AGENT_REPLY'|'FLOW' $InitiationMethod
 * @property string $Name
 * @property string $Description
 * @property 'VOICE'|'CHAT'|'TASK'|'EMAIL' $Channel
 * @property QueueInfo $QueueInfo
 * @property AgentInfo $AgentInfo
 * @property \Aws\Api\DateTimeResult $InitiationTimestamp
 * @property \Aws\Api\DateTimeResult $DisconnectTimestamp
 * @property \Aws\Api\DateTimeResult $LastUpdateTimestamp
 * @property \Aws\Api\DateTimeResult $LastPausedTimestamp
 * @property \Aws\Api\DateTimeResult $LastResumedTimestamp
 * @property int $TotalPauseCount
 * @property int $TotalPauseDurationInSeconds
 * @property \Aws\Api\DateTimeResult $ScheduledTimestamp
 * @property string $RelatedContactId
 * @property WisdomInfo $WisdomInfo
 * @property string $CustomerId
 * @property EndpointInfo $CustomerEndpoint
 * @property EndpointInfo $SystemEndpoint
 * @property int $QueueTimeAdjustmentSeconds
 * @property int $QueuePriority
 * @property array<string, string> $Tags
 * @property \Aws\Api\DateTimeResult $ConnectedToSystemTimestamp
 * @property RoutingCriteria $RoutingCriteria
 * @property Customer $Customer
 * @property Campaign $Campaign
 * @property 'ANSWERED'|'UNDETECTED'|'ERROR'|'HUMAN_ANSWERED'|'SIT_TONE_DETECTED'|'SIT_TONE_BUSY'|'SIT_TONE_INVALID_NUMBER'|'FAX_MACHINE_DETECTED'|'VOICEMAIL_BEEP'|'VOICEMAIL_NO_BEEP'|'AMD_UNRESOLVED'|'AMD_UNANSWERED'|'AMD_ERROR'|'AMD_NOT_APPLICABLE' $AnsweringMachineDetectionStatus
 * @property CustomerVoiceActivity $CustomerVoiceActivity
 * @property QualityMetrics $QualityMetrics
 * @property DisconnectDetails $DisconnectDetails
 * @property AdditionalEmailRecipients $AdditionalEmailRecipients
 * @property array<string, SegmentAttributeValue> $SegmentAttributes
 */
class Contact extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     Id?: string,
     *     InitialContactId?: string,
     *     PreviousContactId?: string,
     *     ContactAssociationId?: string,
     *     InitiationMethod?: 'INBOUND'|'OUTBOUND'|'TRANSFER'|'QUEUE_TRANSFER'|'CALLBACK'|'API'|'DISCONNECT'|'MONITOR'|'EXTERNAL_OUTBOUND'|'WEBRTC_API'|'AGENT_REPLY'|'FLOW',
     *     Name?: string,
     *     Description?: string,
     *     Channel?: 'VOICE'|'CHAT'|'TASK'|'EMAIL',
     *     QueueInfo?: QueueInfo,
     *     AgentInfo?: AgentInfo,
     *     InitiationTimestamp?: \Aws\Api\DateTimeResult,
     *     DisconnectTimestamp?: \Aws\Api\DateTimeResult,
     *     LastUpdateTimestamp?: \Aws\Api\DateTimeResult,
     *     LastPausedTimestamp?: \Aws\Api\DateTimeResult,
     *     LastResumedTimestamp?: \Aws\Api\DateTimeResult,
     *     TotalPauseCount?: int,
     *     TotalPauseDurationInSeconds?: int,
     *     ScheduledTimestamp?: \Aws\Api\DateTimeResult,
     *     RelatedContactId?: string,
     *     WisdomInfo?: WisdomInfo,
     *     CustomerId?: string,
     *     CustomerEndpoint?: EndpointInfo,
     *     SystemEndpoint?: EndpointInfo,
     *     QueueTimeAdjustmentSeconds?: int,
     *     QueuePriority?: int,
     *     Tags?: array<string, string>,
     *     ConnectedToSystemTimestamp?: \Aws\Api\DateTimeResult,
     *     RoutingCriteria?: RoutingCriteria,
     *     Customer?: Customer,
     *     Campaign?: Campaign,
     *     AnsweringMachineDetectionStatus?: 'ANSWERED'|'UNDETECTED'|'ERROR'|'HUMAN_ANSWERED'|'SIT_TONE_DETECTED'|'SIT_TONE_BUSY'|'SIT_TONE_INVALID_NUMBER'|'FAX_MACHINE_DETECTED'|'VOICEMAIL_BEEP'|'VOICEMAIL_NO_BEEP'|'AMD_UNRESOLVED'|'AMD_UNANSWERED'|'AMD_ERROR'|'AMD_NOT_APPLICABLE',
     *     CustomerVoiceActivity?: CustomerVoiceActivity,
     *     QualityMetrics?: QualityMetrics,
     *     DisconnectDetails?: DisconnectDetails,
     *     AdditionalEmailRecipients?: AdditionalEmailRecipients,
     *     SegmentAttributes?: array<string, SegmentAttributeValue>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Connect\StartOutboundVoiceContact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Name
 * @property string|null $Description
 * @property array<string, Shapes\Reference>|null $References
 * @property string|null $RelatedContactId
 * @property string $DestinationPhoneNumber
 * @property string $ContactFlowId
 * @property string $InstanceId
 * @property string|null $ClientToken
 * @property string|null $SourcePhoneNumber
 * @property string|null $QueueId
 * @property array<string, string>|null $Attributes
 * @property Shapes\AnswerMachineDetectionConfig|null $AnswerMachineDetectionConfig
 * @property string|null $CampaignId
 * @property 'GENERAL'|'CAMPAIGN'|null $TrafficType
 * @property Shapes\OutboundStrategy|null $OutboundStrategy
 * @property int<15, 60>|null $RingTimeoutInSeconds
 */
class StartOutboundVoiceContactRequest extends Request
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Description?: string|null,
     *     References?: array<string, Shapes\Reference>|null,
     *     RelatedContactId?: string|null,
     *     DestinationPhoneNumber: string,
     *     ContactFlowId: string,
     *     InstanceId: string,
     *     ClientToken?: string|null,
     *     SourcePhoneNumber?: string|null,
     *     QueueId?: string|null,
     *     Attributes?: array<string, string>|null,
     *     AnswerMachineDetectionConfig?: Shapes\AnswerMachineDetectionConfig|null,
     *     CampaignId?: string|null,
     *     TrafficType?: 'GENERAL'|'CAMPAIGN'|null,
     *     OutboundStrategy?: Shapes\OutboundStrategy|null,
     *     RingTimeoutInSeconds?: int<15, 60>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

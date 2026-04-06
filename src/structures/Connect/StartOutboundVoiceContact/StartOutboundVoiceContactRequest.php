<?php

namespace Sunaoka\Aws\Structures\Connect\StartOutboundVoiceContact;

use Sunaoka\Aws\Structures\Request;

/**
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
 */
class StartOutboundVoiceContactRequest extends Request
{
    /**
     * @param array{
     *     DestinationPhoneNumber: string,
     *     ContactFlowId: string,
     *     InstanceId: string,
     *     ClientToken?: string|null,
     *     SourcePhoneNumber?: string|null,
     *     QueueId?: string|null,
     *     Attributes?: array<string, string>|null,
     *     AnswerMachineDetectionConfig?: Shapes\AnswerMachineDetectionConfig|null,
     *     CampaignId?: string|null,
     *     TrafficType?: 'GENERAL'|'CAMPAIGN'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

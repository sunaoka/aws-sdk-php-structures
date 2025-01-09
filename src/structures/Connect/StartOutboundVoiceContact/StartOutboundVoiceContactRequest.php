<?php

namespace Sunaoka\Aws\Structures\Connect\StartOutboundVoiceContact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Description
 * @property array<string, Shapes\Reference> $References
 * @property string $RelatedContactId
 * @property string $DestinationPhoneNumber
 * @property string $ContactFlowId
 * @property string $InstanceId
 * @property string $ClientToken
 * @property string $SourcePhoneNumber
 * @property string $QueueId
 * @property array<string, string> $Attributes
 * @property Shapes\AnswerMachineDetectionConfig $AnswerMachineDetectionConfig
 * @property string $CampaignId
 * @property 'GENERAL'|'CAMPAIGN' $TrafficType
 */
class StartOutboundVoiceContactRequest extends Request
{
    /**
     * @param array{
     *     Name?: string,
     *     Description?: string,
     *     References?: array<string, Shapes\Reference>,
     *     RelatedContactId?: string,
     *     DestinationPhoneNumber: string,
     *     ContactFlowId: string,
     *     InstanceId: string,
     *     ClientToken?: string,
     *     SourcePhoneNumber?: string,
     *     QueueId?: string,
     *     Attributes?: array<string, string>,
     *     AnswerMachineDetectionConfig?: Shapes\AnswerMachineDetectionConfig,
     *     CampaignId?: string,
     *     TrafficType?: 'GENERAL'|'CAMPAIGN'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

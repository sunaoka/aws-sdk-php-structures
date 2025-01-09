<?php

namespace Sunaoka\Aws\Structures\Connect\StartOutboundChatContact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Endpoint $SourceEndpoint
 * @property Shapes\Endpoint $DestinationEndpoint
 * @property string $InstanceId
 * @property array<string, Shapes\SegmentAttributeValue> $SegmentAttributes
 * @property array<string, string> $Attributes
 * @property string $ContactFlowId
 * @property int<60, 10080> $ChatDurationInMinutes
 * @property Shapes\ParticipantDetails $ParticipantDetails
 * @property Shapes\ChatMessage $InitialSystemMessage
 * @property string $RelatedContactId
 * @property list<string> $SupportedMessagingContentTypes
 * @property string $ClientToken
 */
class StartOutboundChatContactRequest extends Request
{
    /**
     * @param array{
     *     SourceEndpoint: Shapes\Endpoint,
     *     DestinationEndpoint: Shapes\Endpoint,
     *     InstanceId: string,
     *     SegmentAttributes: array<string, Shapes\SegmentAttributeValue>,
     *     Attributes?: array<string, string>,
     *     ContactFlowId: string,
     *     ChatDurationInMinutes?: int<60, 10080>,
     *     ParticipantDetails?: Shapes\ParticipantDetails,
     *     InitialSystemMessage?: Shapes\ChatMessage,
     *     RelatedContactId?: string,
     *     SupportedMessagingContentTypes?: list<string>,
     *     ClientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

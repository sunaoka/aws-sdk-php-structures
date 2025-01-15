<?php

namespace Sunaoka\Aws\Structures\Connect\StartOutboundChatContact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Endpoint $SourceEndpoint
 * @property Shapes\Endpoint $DestinationEndpoint
 * @property string $InstanceId
 * @property array<string, Shapes\SegmentAttributeValue> $SegmentAttributes
 * @property array<string, string>|null $Attributes
 * @property string $ContactFlowId
 * @property int<60, 10080>|null $ChatDurationInMinutes
 * @property Shapes\ParticipantDetails|null $ParticipantDetails
 * @property Shapes\ChatMessage|null $InitialSystemMessage
 * @property string|null $RelatedContactId
 * @property list<string>|null $SupportedMessagingContentTypes
 * @property string|null $ClientToken
 */
class StartOutboundChatContactRequest extends Request
{
    /**
     * @param array{
     *     SourceEndpoint: Shapes\Endpoint,
     *     DestinationEndpoint: Shapes\Endpoint,
     *     InstanceId: string,
     *     SegmentAttributes: array<string, Shapes\SegmentAttributeValue>,
     *     Attributes?: array<string, string>|null,
     *     ContactFlowId: string,
     *     ChatDurationInMinutes?: int<60, 10080>|null,
     *     ParticipantDetails?: Shapes\ParticipantDetails|null,
     *     InitialSystemMessage?: Shapes\ChatMessage|null,
     *     RelatedContactId?: string|null,
     *     SupportedMessagingContentTypes?: list<string>|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

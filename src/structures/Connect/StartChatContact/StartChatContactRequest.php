<?php

namespace Sunaoka\Aws\Structures\Connect\StartChatContact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $ContactFlowId
 * @property array<string, string> $Attributes
 * @property Shapes\ParticipantDetails $ParticipantDetails
 * @property Shapes\ChatMessage $InitialMessage
 * @property string $ClientToken
 * @property int<60, 10080> $ChatDurationInMinutes
 * @property list<string> $SupportedMessagingContentTypes
 * @property Shapes\PersistentChat $PersistentChat
 * @property string $RelatedContactId
 * @property array<string, Shapes\SegmentAttributeValue> $SegmentAttributes
 * @property string $CustomerId
 */
class StartChatContactRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ContactFlowId: string,
     *     Attributes?: array<string, string>,
     *     ParticipantDetails: Shapes\ParticipantDetails,
     *     InitialMessage?: Shapes\ChatMessage,
     *     ClientToken?: string,
     *     ChatDurationInMinutes?: int<60, 10080>,
     *     SupportedMessagingContentTypes?: list<string>,
     *     PersistentChat?: Shapes\PersistentChat,
     *     RelatedContactId?: string,
     *     SegmentAttributes?: array<string, Shapes\SegmentAttributeValue>,
     *     CustomerId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

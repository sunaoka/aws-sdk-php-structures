<?php

namespace Sunaoka\Aws\Structures\Connect\StartChatContact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $ContactFlowId
 * @property array<string, string>|null $Attributes
 * @property Shapes\ParticipantDetails $ParticipantDetails
 * @property Shapes\ChatMessage|null $InitialMessage
 * @property string|null $ClientToken
 * @property int<60, 10080>|null $ChatDurationInMinutes
 * @property list<string>|null $SupportedMessagingContentTypes
 * @property Shapes\PersistentChat|null $PersistentChat
 * @property string|null $RelatedContactId
 * @property array<string, Shapes\SegmentAttributeValue>|null $SegmentAttributes
 * @property string|null $CustomerId
 */
class StartChatContactRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ContactFlowId: string,
     *     Attributes?: array<string, string>|null,
     *     ParticipantDetails: Shapes\ParticipantDetails,
     *     InitialMessage?: Shapes\ChatMessage|null,
     *     ClientToken?: string|null,
     *     ChatDurationInMinutes?: int<60, 10080>|null,
     *     SupportedMessagingContentTypes?: list<string>|null,
     *     PersistentChat?: Shapes\PersistentChat|null,
     *     RelatedContactId?: string|null,
     *     SegmentAttributes?: array<string, Shapes\SegmentAttributeValue>|null,
     *     CustomerId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

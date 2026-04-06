<?php

namespace Sunaoka\Aws\Structures\ConnectParticipant\GetTranscript\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AbsoluteTime
 * @property string|null $Content
 * @property string|null $ContentType
 * @property string|null $Id
 * @property 'TYPING'|'PARTICIPANT_JOINED'|'PARTICIPANT_LEFT'|'CHAT_ENDED'|'TRANSFER_SUCCEEDED'|'TRANSFER_FAILED'|'MESSAGE'|'EVENT'|'ATTACHMENT'|'CONNECTION_ACK'|'MESSAGE_DELIVERED'|'MESSAGE_READ'|null $Type
 * @property string|null $ParticipantId
 * @property string|null $DisplayName
 * @property 'AGENT'|'CUSTOMER'|'SYSTEM'|'CUSTOM_BOT'|'SUPERVISOR'|null $ParticipantRole
 * @property list<AttachmentItem>|null $Attachments
 * @property MessageMetadata|null $MessageMetadata
 * @property string|null $RelatedContactId
 * @property string|null $ContactId
 */
class Item extends Shape
{
    /**
     * @param array{
     *     AbsoluteTime?: string|null,
     *     Content?: string|null,
     *     ContentType?: string|null,
     *     Id?: string|null,
     *     Type?: 'TYPING'|'PARTICIPANT_JOINED'|'PARTICIPANT_LEFT'|'CHAT_ENDED'|'TRANSFER_SUCCEEDED'|'TRANSFER_FAILED'|'MESSAGE'|'EVENT'|'ATTACHMENT'|'CONNECTION_ACK'|'MESSAGE_DELIVERED'|'MESSAGE_READ'|null,
     *     ParticipantId?: string|null,
     *     DisplayName?: string|null,
     *     ParticipantRole?: 'AGENT'|'CUSTOMER'|'SYSTEM'|'CUSTOM_BOT'|'SUPERVISOR'|null,
     *     Attachments?: list<AttachmentItem>|null,
     *     MessageMetadata?: MessageMetadata|null,
     *     RelatedContactId?: string|null,
     *     ContactId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

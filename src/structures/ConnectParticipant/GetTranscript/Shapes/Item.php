<?php

namespace Sunaoka\Aws\Structures\ConnectParticipant\GetTranscript\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AbsoluteTime
 * @property string $Content
 * @property string $ContentType
 * @property string $Id
 * @property 'TYPING'|'PARTICIPANT_JOINED'|'PARTICIPANT_LEFT'|'CHAT_ENDED'|'TRANSFER_SUCCEEDED'|'TRANSFER_FAILED'|'MESSAGE'|'EVENT'|'ATTACHMENT'|'CONNECTION_ACK'|'MESSAGE_DELIVERED'|'MESSAGE_READ' $Type
 * @property string $ParticipantId
 * @property string $DisplayName
 * @property 'AGENT'|'CUSTOMER'|'SYSTEM'|'CUSTOM_BOT'|'SUPERVISOR' $ParticipantRole
 * @property list<AttachmentItem> $Attachments
 * @property MessageMetadata $MessageMetadata
 * @property string $RelatedContactId
 * @property string $ContactId
 */
class Item extends Shape
{
    /**
     * @param array{
     *     AbsoluteTime?: string,
     *     Content?: string,
     *     ContentType?: string,
     *     Id?: string,
     *     Type?: 'TYPING'|'PARTICIPANT_JOINED'|'PARTICIPANT_LEFT'|'CHAT_ENDED'|'TRANSFER_SUCCEEDED'|'TRANSFER_FAILED'|'MESSAGE'|'EVENT'|'ATTACHMENT'|'CONNECTION_ACK'|'MESSAGE_DELIVERED'|'MESSAGE_READ',
     *     ParticipantId?: string,
     *     DisplayName?: string,
     *     ParticipantRole?: 'AGENT'|'CUSTOMER'|'SYSTEM'|'CUSTOM_BOT'|'SUPERVISOR',
     *     Attachments?: list<AttachmentItem>,
     *     MessageMetadata?: MessageMetadata,
     *     RelatedContactId?: string,
     *     ContactId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

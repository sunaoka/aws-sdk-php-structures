<?php

namespace Sunaoka\Aws\Structures\MailManager\GetArchiveSearchResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ArchivedMessageId
 * @property \Aws\Api\DateTimeResult|null $ReceivedTimestamp
 * @property string|null $Date
 * @property string|null $To
 * @property string|null $From
 * @property string|null $Cc
 * @property string|null $Subject
 * @property string|null $MessageId
 * @property bool|null $HasAttachments
 * @property list<string>|null $ReceivedHeaders
 * @property string|null $InReplyTo
 * @property string|null $XMailer
 * @property string|null $XOriginalMailer
 * @property string|null $XPriority
 * @property string|null $IngressPointId
 * @property string|null $SenderHostname
 * @property string|null $SenderIpAddress
 * @property Envelope|null $Envelope
 * @property string|null $SourceArn
 */
class Row extends Shape
{
    /**
     * @param array{
     *     ArchivedMessageId?: string|null,
     *     ReceivedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     Date?: string|null,
     *     To?: string|null,
     *     From?: string|null,
     *     Cc?: string|null,
     *     Subject?: string|null,
     *     MessageId?: string|null,
     *     HasAttachments?: bool|null,
     *     ReceivedHeaders?: list<string>|null,
     *     InReplyTo?: string|null,
     *     XMailer?: string|null,
     *     XOriginalMailer?: string|null,
     *     XPriority?: string|null,
     *     IngressPointId?: string|null,
     *     SenderHostname?: string|null,
     *     SenderIpAddress?: string|null,
     *     Envelope?: Envelope|null,
     *     SourceArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\MailManager\GetArchiveSearchResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ArchivedMessageId
 * @property string $Cc
 * @property string $Date
 * @property Envelope $Envelope
 * @property string $From
 * @property bool $HasAttachments
 * @property string $InReplyTo
 * @property string $IngressPointId
 * @property string $MessageId
 * @property list<string> $ReceivedHeaders
 * @property \Aws\Api\DateTimeResult $ReceivedTimestamp
 * @property string $SenderHostname
 * @property string $SenderIpAddress
 * @property string $Subject
 * @property string $To
 * @property string $XMailer
 * @property string $XOriginalMailer
 * @property string $XPriority
 */
class Row extends Shape
{
    /**
     * @param array{
     *     ArchivedMessageId?: string,
     *     Cc?: string,
     *     Date?: string,
     *     Envelope?: Envelope,
     *     From?: string,
     *     HasAttachments?: bool,
     *     InReplyTo?: string,
     *     IngressPointId?: string,
     *     MessageId?: string,
     *     ReceivedHeaders?: list<string>,
     *     ReceivedTimestamp?: \Aws\Api\DateTimeResult,
     *     SenderHostname?: string,
     *     SenderIpAddress?: string,
     *     Subject?: string,
     *     To?: string,
     *     XMailer?: string,
     *     XOriginalMailer?: string,
     *     XPriority?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

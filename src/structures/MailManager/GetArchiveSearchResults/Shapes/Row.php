<?php

namespace Sunaoka\Aws\Structures\MailManager\GetArchiveSearchResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ArchivedMessageId
 * @property string|null $Cc
 * @property string|null $Date
 * @property string|null $From
 * @property bool|null $HasAttachments
 * @property string|null $InReplyTo
 * @property string|null $MessageId
 * @property list<string>|null $ReceivedHeaders
 * @property \Aws\Api\DateTimeResult|null $ReceivedTimestamp
 * @property string|null $Subject
 * @property string|null $To
 * @property string|null $XMailer
 * @property string|null $XOriginalMailer
 * @property string|null $XPriority
 */
class Row extends Shape
{
    /**
     * @param array{
     *     ArchivedMessageId?: string|null,
     *     Cc?: string|null,
     *     Date?: string|null,
     *     From?: string|null,
     *     HasAttachments?: bool|null,
     *     InReplyTo?: string|null,
     *     MessageId?: string|null,
     *     ReceivedHeaders?: list<string>|null,
     *     ReceivedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     Subject?: string|null,
     *     To?: string|null,
     *     XMailer?: string|null,
     *     XOriginalMailer?: string|null,
     *     XPriority?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

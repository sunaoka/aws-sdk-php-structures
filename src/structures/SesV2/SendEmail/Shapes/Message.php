<?php

namespace Sunaoka\Aws\Structures\SesV2\SendEmail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Content $Subject
 * @property Body $Body
 * @property list<MessageHeader>|null $Headers
 * @property list<Attachment>|null $Attachments
 */
class Message extends Shape
{
    /**
     * @param array{
     *     Subject: Content,
     *     Body: Body,
     *     Headers?: list<MessageHeader>|null,
     *     Attachments?: list<Attachment>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

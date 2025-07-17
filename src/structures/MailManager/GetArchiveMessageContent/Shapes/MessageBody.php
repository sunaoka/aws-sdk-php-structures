<?php

namespace Sunaoka\Aws\Structures\MailManager\GetArchiveMessageContent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Text
 * @property string|null $Html
 * @property bool|null $MessageMalformed
 */
class MessageBody extends Shape
{
    /**
     * @param array{
     *     Text?: string|null,
     *     Html?: string|null,
     *     MessageMalformed?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\MailManager\GetArchiveMessageContent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Html
 * @property bool $MessageMalformed
 * @property string $Text
 */
class MessageBody extends Shape
{
    /**
     * @param array{
     *     Html?: string,
     *     MessageMalformed?: bool,
     *     Text?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

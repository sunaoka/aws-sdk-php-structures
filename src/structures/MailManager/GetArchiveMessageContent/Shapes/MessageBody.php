<?php

namespace Sunaoka\Aws\Structures\MailManager\GetArchiveMessageContent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Html
 * @property bool|null $MessageMalformed
 * @property string|null $Text
 */
class MessageBody extends Shape
{
    /**
     * @param array{
     *     Html?: string|null,
     *     MessageMalformed?: bool|null,
     *     Text?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

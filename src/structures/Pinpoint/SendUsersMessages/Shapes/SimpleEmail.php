<?php

namespace Sunaoka\Aws\Structures\Pinpoint\SendUsersMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SimpleEmailPart|null $HtmlPart
 * @property SimpleEmailPart|null $Subject
 * @property SimpleEmailPart|null $TextPart
 * @property list<MessageHeader>|null $Headers
 */
class SimpleEmail extends Shape
{
    /**
     * @param array{
     *     HtmlPart?: SimpleEmailPart|null,
     *     Subject?: SimpleEmailPart|null,
     *     TextPart?: SimpleEmailPart|null,
     *     Headers?: list<MessageHeader>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Pinpoint\SendMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SimpleEmailPart $HtmlPart
 * @property SimpleEmailPart $Subject
 * @property SimpleEmailPart $TextPart
 * @property list<MessageHeader> $Headers
 */
class SimpleEmail extends Shape
{
    /**
     * @param array{
     *     HtmlPart?: SimpleEmailPart,
     *     Subject?: SimpleEmailPart,
     *     TextPart?: SimpleEmailPart,
     *     Headers?: list<MessageHeader>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

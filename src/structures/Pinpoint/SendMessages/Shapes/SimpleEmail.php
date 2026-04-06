<?php

namespace Sunaoka\Aws\Structures\Pinpoint\SendMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SimpleEmailPart|null $HtmlPart
 * @property SimpleEmailPart|null $Subject
 * @property SimpleEmailPart|null $TextPart
 */
class SimpleEmail extends Shape
{
    /**
     * @param array{
     *     HtmlPart?: SimpleEmailPart|null,
     *     Subject?: SimpleEmailPart|null,
     *     TextPart?: SimpleEmailPart|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

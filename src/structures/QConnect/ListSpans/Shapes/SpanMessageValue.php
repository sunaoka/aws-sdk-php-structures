<?php

namespace Sunaoka\Aws\Structures\QConnect\ListSpans\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SpanTextValue|null $text
 * @property SpanToolUseValue|null $toolUse
 * @property SpanToolResultValue|null $toolResult
 */
class SpanMessageValue extends Shape
{
    /**
     * @param array{
     *     text?: SpanTextValue|null,
     *     toolUse?: SpanToolUseValue|null,
     *     toolResult?: SpanToolResultValue|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

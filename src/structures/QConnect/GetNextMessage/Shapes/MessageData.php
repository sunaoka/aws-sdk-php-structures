<?php

namespace Sunaoka\Aws\Structures\QConnect\GetNextMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TextMessage|null $text
 * @property ToolUseResultData|null $toolUseResult
 */
class MessageData extends Shape
{
    /**
     * @param array{
     *     text?: TextMessage|null,
     *     toolUseResult?: ToolUseResultData|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\QConnect\SendMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TextMessage|null $text
 * @property ToolUseResultData|null $toolUseResult
 * @property JSONDocument|null $data
 */
class MessageData extends Shape
{
    /**
     * @param array{
     *     text?: TextMessage|null,
     *     toolUseResult?: ToolUseResultData|null,
     *     data?: JSONDocument|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

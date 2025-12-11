<?php

namespace Sunaoka\Aws\Structures\QConnect\ListMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $toolUseId
 * @property string $toolName
 * @property JSONDocument $toolResult
 * @property JSONDocument|null $inputSchema
 */
class ToolUseResultData extends Shape
{
    /**
     * @param array{
     *     toolUseId: string,
     *     toolName: string,
     *     toolResult: JSONDocument,
     *     inputSchema?: JSONDocument|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

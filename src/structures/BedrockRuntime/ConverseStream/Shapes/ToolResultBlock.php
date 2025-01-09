<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $toolUseId
 * @property list<ToolResultContentBlock> $content
 * @property 'success'|'error' $status
 */
class ToolResultBlock extends Shape
{
    /**
     * @param array{
     *     toolUseId: string,
     *     content: list<ToolResultContentBlock>,
     *     status?: 'success'|'error'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

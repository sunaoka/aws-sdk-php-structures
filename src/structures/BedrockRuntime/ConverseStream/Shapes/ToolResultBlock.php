<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $toolUseId
 * @property list<ToolResultContentBlock> $content
 * @property 'success'|'error'|null $status
 */
class ToolResultBlock extends Shape
{
    /**
     * @param array{
     *     toolUseId: string,
     *     content: list<ToolResultContentBlock>,
     *     status?: 'success'|'error'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

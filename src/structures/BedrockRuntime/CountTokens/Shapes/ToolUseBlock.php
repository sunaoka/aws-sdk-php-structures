<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\CountTokens\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $toolUseId
 * @property string $name
 * @property Document $input
 */
class ToolUseBlock extends Shape
{
    /**
     * @param array{
     *     toolUseId: string,
     *     name: string,
     *     input: Document
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

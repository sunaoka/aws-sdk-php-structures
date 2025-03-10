<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $body
 * @property list<ImageInput>|null $images
 */
class ContentBody extends Shape
{
    /**
     * @param array{
     *     body?: string|null,
     *     images?: list<ImageInput>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

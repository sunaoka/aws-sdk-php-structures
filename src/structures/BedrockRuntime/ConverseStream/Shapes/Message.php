<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'user'|'assistant' $role
 * @property list<ContentBlock> $content
 */
class Message extends Shape
{
    /**
     * @param array{
     *     role: 'user'|'assistant',
     *     content: list<ContentBlock>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

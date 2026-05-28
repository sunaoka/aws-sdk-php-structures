<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\CountTokens\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'user'|'assistant'|'system' $role
 * @property list<ContentBlock> $content
 */
class Message extends Shape
{
    /**
     * @param array{
     *     role: 'user'|'assistant'|'system',
     *     content: list<ContentBlock>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

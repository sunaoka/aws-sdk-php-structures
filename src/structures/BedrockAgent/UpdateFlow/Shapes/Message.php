<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ContentBlock> $content
 * @property 'user'|'assistant' $role
 */
class Message extends Shape
{
    /**
     * @param array{
     *     content: list<ContentBlock>,
     *     role: 'user'|'assistant'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

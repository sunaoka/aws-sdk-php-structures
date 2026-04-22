<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeHarness\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'user'|'assistant' $role
 * @property list<HarnessContentBlock> $content
 */
class HarnessMessage extends Shape
{
    /**
     * @param array{
     *     role: 'user'|'assistant',
     *     content: list<HarnessContentBlock>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

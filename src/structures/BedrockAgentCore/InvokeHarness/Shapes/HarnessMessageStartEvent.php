<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeHarness\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'user'|'assistant' $role
 */
class HarnessMessageStartEvent extends Shape
{
    /**
     * @param array{role: 'user'|'assistant'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

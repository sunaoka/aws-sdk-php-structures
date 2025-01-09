<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\RetrieveAndGenerateStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INTERVENED'|'NONE' $action
 */
class GuardrailEvent extends Shape
{
    /**
     * @param array{action?: 'INTERVENED'|'NONE'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Citation> $citations
 */
class Attribution extends Shape
{
    /**
     * @param array{citations?: list<Citation>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Citation>|null $citations
 */
class Attribution extends Shape
{
    /**
     * @param array{citations?: list<Citation>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

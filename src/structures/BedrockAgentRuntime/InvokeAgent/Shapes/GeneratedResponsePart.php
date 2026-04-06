<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TextResponsePart|null $textResponsePart
 */
class GeneratedResponsePart extends Shape
{
    /**
     * @param array{textResponsePart?: TextResponsePart|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

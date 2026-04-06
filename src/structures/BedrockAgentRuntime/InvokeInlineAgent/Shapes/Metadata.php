<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Usage|null $usage
 */
class Metadata extends Shape
{
    /**
     * @param array{usage?: Usage|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

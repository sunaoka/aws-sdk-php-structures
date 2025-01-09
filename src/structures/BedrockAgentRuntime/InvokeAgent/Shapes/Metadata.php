<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Usage $usage
 */
class Metadata extends Shape
{
    /**
     * @param array{usage?: Usage} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

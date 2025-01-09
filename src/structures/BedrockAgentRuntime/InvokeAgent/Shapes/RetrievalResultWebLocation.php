<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $url
 */
class RetrievalResultWebLocation extends Shape
{
    /**
     * @param array{url?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

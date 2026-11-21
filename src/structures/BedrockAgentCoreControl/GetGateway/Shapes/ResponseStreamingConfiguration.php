<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 8192>|null $maxEventsPerInvocation
 */
class ResponseStreamingConfiguration extends Shape
{
    /**
     * @param array{maxEventsPerInvocation?: int<1, 8192>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

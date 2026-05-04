<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $enableResponseStreaming
 */
class StreamingConfiguration extends Shape
{
    /**
     * @param array{enableResponseStreaming?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

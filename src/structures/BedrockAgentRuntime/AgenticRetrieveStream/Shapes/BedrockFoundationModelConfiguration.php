<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\AgenticRetrieveStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BedrockFoundationModelModelConfiguration $modelConfiguration
 */
class BedrockFoundationModelConfiguration extends Shape
{
    /**
     * @param array{modelConfiguration: BedrockFoundationModelModelConfiguration} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\AgenticRetrieveStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MantleFoundationModelModelConfiguration $modelConfiguration
 */
class MantleFoundationModelConfiguration extends Shape
{
    /**
     * @param array{modelConfiguration: MantleFoundationModelModelConfiguration} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

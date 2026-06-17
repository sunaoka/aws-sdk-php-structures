<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\AgenticRetrieveStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $message
 */
class AgenticRetrieveFailure extends Shape
{
    /**
     * @param array{message: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

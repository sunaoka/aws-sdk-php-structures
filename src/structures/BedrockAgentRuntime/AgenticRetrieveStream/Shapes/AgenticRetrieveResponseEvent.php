<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\AgenticRetrieveStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $text
 */
class AgenticRetrieveResponseEvent extends Shape
{
    /**
     * @param array{text: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

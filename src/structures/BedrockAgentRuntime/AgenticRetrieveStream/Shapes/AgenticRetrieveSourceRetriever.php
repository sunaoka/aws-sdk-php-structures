<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\AgenticRetrieveStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $identifier
 */
class AgenticRetrieveSourceRetriever extends Shape
{
    /**
     * @param array{identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

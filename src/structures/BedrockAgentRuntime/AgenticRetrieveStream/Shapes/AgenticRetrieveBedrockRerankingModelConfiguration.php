<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\AgenticRetrieveStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $modelArn
 */
class AgenticRetrieveBedrockRerankingModelConfiguration extends Shape
{
    /**
     * @param array{modelArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

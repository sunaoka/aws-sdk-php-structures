<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\AgenticRetrieveStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AgenticRetrieveBedrockRerankingModelConfiguration $modelConfiguration
 */
class AgenticRetrieveBedrockRerankingConfiguration extends Shape
{
    /**
     * @param array{modelConfiguration: AgenticRetrieveBedrockRerankingModelConfiguration} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\AgenticRetrieveStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RetrieverConfiguration $configuration
 * @property string|null $description
 */
class AgenticRetriever extends Shape
{
    /**
     * @param array{
     *     configuration: RetrieverConfiguration,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

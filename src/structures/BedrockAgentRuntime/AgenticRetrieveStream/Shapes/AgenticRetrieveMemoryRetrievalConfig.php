<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\AgenticRetrieveStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AgenticRetrieveMemoryMetadataFilter>|null $metadataFilters
 * @property string|null $namespace
 * @property string|null $namespacePath
 * @property string|null $strategyId
 */
class AgenticRetrieveMemoryRetrievalConfig extends Shape
{
    /**
     * @param array{
     *     metadataFilters?: list<AgenticRetrieveMemoryMetadataFilter>|null,
     *     namespace?: string|null,
     *     namespacePath?: string|null,
     *     strategyId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\RetrieveAndGenerateStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RetrievalFilter|null $filter
 * @property int<1, 100>|null $numberOfResults
 * @property ManagedSearchRerankingConfiguration|null $rerankingConfiguration
 * @property 'CUSTOM'|'MANAGED'|'NONE'|null $rerankingModelType
 */
class ManagedSearchConfiguration extends Shape
{
    /**
     * @param array{
     *     filter?: RetrievalFilter|null,
     *     numberOfResults?: int<1, 100>|null,
     *     rerankingConfiguration?: ManagedSearchRerankingConfiguration|null,
     *     rerankingModelType?: 'CUSTOM'|'MANAGED'|'NONE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

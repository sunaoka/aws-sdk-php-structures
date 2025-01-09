<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RetrievalFilter $filter
 * @property ImplicitFilterConfiguration $implicitFilterConfiguration
 * @property int<1, 100> $numberOfResults
 * @property 'HYBRID'|'SEMANTIC' $overrideSearchType
 * @property VectorSearchRerankingConfiguration $rerankingConfiguration
 */
class KnowledgeBaseVectorSearchConfiguration extends Shape
{
    /**
     * @param array{
     *     filter?: RetrievalFilter,
     *     implicitFilterConfiguration?: ImplicitFilterConfiguration,
     *     numberOfResults?: int<1, 100>,
     *     overrideSearchType?: 'HYBRID'|'SEMANTIC',
     *     rerankingConfiguration?: VectorSearchRerankingConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

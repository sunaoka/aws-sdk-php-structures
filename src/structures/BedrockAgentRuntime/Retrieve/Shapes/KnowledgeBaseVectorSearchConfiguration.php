<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\Retrieve\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 100>|null $numberOfResults
 * @property 'HYBRID'|'SEMANTIC'|null $overrideSearchType
 * @property RetrievalFilter|null $filter
 * @property VectorSearchRerankingConfiguration|null $rerankingConfiguration
 * @property ImplicitFilterConfiguration|null $implicitFilterConfiguration
 */
class KnowledgeBaseVectorSearchConfiguration extends Shape
{
    /**
     * @param array{
     *     numberOfResults?: int<1, 100>|null,
     *     overrideSearchType?: 'HYBRID'|'SEMANTIC'|null,
     *     filter?: RetrievalFilter|null,
     *     rerankingConfiguration?: VectorSearchRerankingConfiguration|null,
     *     implicitFilterConfiguration?: ImplicitFilterConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

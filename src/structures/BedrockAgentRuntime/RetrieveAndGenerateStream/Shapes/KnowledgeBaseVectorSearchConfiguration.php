<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\RetrieveAndGenerateStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RetrievalFilter|null $filter
 * @property ImplicitFilterConfiguration|null $implicitFilterConfiguration
 * @property int<1, 100>|null $numberOfResults
 * @property 'HYBRID'|'SEMANTIC'|null $overrideSearchType
 * @property VectorSearchRerankingConfiguration|null $rerankingConfiguration
 */
class KnowledgeBaseVectorSearchConfiguration extends Shape
{
    /**
     * @param array{
     *     filter?: RetrievalFilter|null,
     *     implicitFilterConfiguration?: ImplicitFilterConfiguration|null,
     *     numberOfResults?: int<1, 100>|null,
     *     overrideSearchType?: 'HYBRID'|'SEMANTIC'|null,
     *     rerankingConfiguration?: VectorSearchRerankingConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

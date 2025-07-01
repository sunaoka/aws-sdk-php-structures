<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateEvaluationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 100>|null $numberOfResults
 * @property 'HYBRID'|'SEMANTIC'|null $overrideSearchType
 * @property RetrievalFilter|null $filter
 * @property ImplicitFilterConfiguration|null $implicitFilterConfiguration
 * @property VectorSearchRerankingConfiguration|null $rerankingConfiguration
 */
class KnowledgeBaseVectorSearchConfiguration extends Shape
{
    /**
     * @param array{
     *     numberOfResults?: int<1, 100>|null,
     *     overrideSearchType?: 'HYBRID'|'SEMANTIC'|null,
     *     filter?: RetrievalFilter|null,
     *     implicitFilterConfiguration?: ImplicitFilterConfiguration|null,
     *     rerankingConfiguration?: VectorSearchRerankingConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

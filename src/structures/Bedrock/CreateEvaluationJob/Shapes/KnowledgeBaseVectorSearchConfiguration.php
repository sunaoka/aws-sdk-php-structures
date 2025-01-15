<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateEvaluationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 100>|null $numberOfResults
 * @property 'HYBRID'|'SEMANTIC'|null $overrideSearchType
 * @property RetrievalFilter|null $filter
 */
class KnowledgeBaseVectorSearchConfiguration extends Shape
{
    /**
     * @param array{
     *     numberOfResults?: int<1, 100>|null,
     *     overrideSearchType?: 'HYBRID'|'SEMANTIC'|null,
     *     filter?: RetrievalFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

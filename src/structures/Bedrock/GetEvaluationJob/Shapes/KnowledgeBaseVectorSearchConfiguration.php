<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetEvaluationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $numberOfResults
 * @property 'HYBRID'|'SEMANTIC' $overrideSearchType
 * @property RetrievalFilter $filter
 */
class KnowledgeBaseVectorSearchConfiguration extends Shape
{
    /**
     * @param array{
     *     numberOfResults?: int,
     *     overrideSearchType?: 'HYBRID'|'SEMANTIC',
     *     filter?: RetrievalFilter
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

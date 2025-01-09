<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateEvaluationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 100> $numberOfResults
 * @property 'HYBRID'|'SEMANTIC' $overrideSearchType
 * @property RetrievalFilter $filter
 */
class KnowledgeBaseVectorSearchConfiguration extends Shape
{
    /**
     * @param array{
     *     numberOfResults?: int<1, 100>,
     *     overrideSearchType?: 'HYBRID'|'SEMANTIC',
     *     filter?: RetrievalFilter
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

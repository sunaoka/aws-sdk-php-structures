<?php

namespace Sunaoka\Aws\Structures\QConnect\Retrieve\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property KnowledgeSource $knowledgeSource
 * @property RetrievalFilterConfiguration|null $filter
 * @property int|null $numberOfResults
 * @property 'HYBRID'|'SEMANTIC'|null $overrideKnowledgeBaseSearchType
 */
class RetrievalConfiguration extends Shape
{
    /**
     * @param array{
     *     knowledgeSource: KnowledgeSource,
     *     filter?: RetrievalFilterConfiguration|null,
     *     numberOfResults?: int|null,
     *     overrideKnowledgeBaseSearchType?: 'HYBRID'|'SEMANTIC'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\QuickSight\SearchKnowledgeBases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'KNOWLEDGE_BASE_SIZE_BYTES'|'CREATED_AT' $sortByField
 * @property 'ASC'|'DESC' $sortOrder
 */
class KnowledgeBaseSortBy extends Shape
{
    /**
     * @param array{
     *     sortByField: 'KNOWLEDGE_BASE_SIZE_BYTES'|'CREATED_AT',
     *     sortOrder: 'ASC'|'DESC'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

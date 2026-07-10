<?php

namespace Sunaoka\Aws\Structures\QuickSight\SearchKnowledgeBases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'KNOWLEDGE_BASE_ID'|'KNOWLEDGE_BASE_NAME'|'DIRECT_QUICKSIGHT_OWNER'|'DIRECT_QUICKSIGHT_VIEWER_OR_OWNER'|'DIRECT_QUICKSIGHT_SOLE_OWNER'|'KNOWLEDGE_BASE_SIZE_BYTES'|'PRIMARY_OWNER'|'DATASOURCE_ARN' $name
 * @property 'STRING_EQUALS'|'STRING_LIKE'|'GREATER_THAN_OR_EQUALS'|'LESS_THAN_OR_EQUALS' $operator
 * @property string $value
 */
class KnowledgeBaseSearchFilter extends Shape
{
    /**
     * @param array{
     *     name: 'KNOWLEDGE_BASE_ID'|'KNOWLEDGE_BASE_NAME'|'DIRECT_QUICKSIGHT_OWNER'|'DIRECT_QUICKSIGHT_VIEWER_OR_OWNER'|'DIRECT_QUICKSIGHT_SOLE_OWNER'|'KNOWLEDGE_BASE_SIZE_BYTES'|'PRIMARY_OWNER'|'DATASOURCE_ARN',
     *     operator: 'STRING_EQUALS'|'STRING_LIKE'|'GREATER_THAN_OR_EQUALS'|'LESS_THAN_OR_EQUALS',
     *     value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

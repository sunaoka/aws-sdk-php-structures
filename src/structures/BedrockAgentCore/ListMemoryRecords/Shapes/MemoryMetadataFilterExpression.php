<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\ListMemoryRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MemoryRecordLeftExpression $left
 * @property 'EQUALS_TO'|'EXISTS'|'NOT_EXISTS'|'BEFORE'|'AFTER'|'CONTAINS'|'GREATER_THAN'|'GREATER_THAN_OR_EQUALS'|'LESS_THAN'|'LESS_THAN_OR_EQUALS' $operator
 * @property MemoryRecordRightExpression|null $right
 */
class MemoryMetadataFilterExpression extends Shape
{
    /**
     * @param array{
     *     left: MemoryRecordLeftExpression,
     *     operator: 'EQUALS_TO'|'EXISTS'|'NOT_EXISTS'|'BEFORE'|'AFTER'|'CONTAINS'|'GREATER_THAN'|'GREATER_THAN_OR_EQUALS'|'LESS_THAN'|'LESS_THAN_OR_EQUALS',
     *     right?: MemoryRecordRightExpression|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

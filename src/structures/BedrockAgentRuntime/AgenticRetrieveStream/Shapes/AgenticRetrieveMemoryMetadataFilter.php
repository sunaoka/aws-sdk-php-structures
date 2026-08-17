<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\AgenticRetrieveStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AgenticRetrieveMemoryMetadataFilterLeft $left
 * @property 'EQUALS_TO'|'EXISTS'|'NOT_EXISTS'|'BEFORE'|'AFTER'|'CONTAINS'|'GREATER_THAN'|'GREATER_THAN_OR_EQUALS'|'LESS_THAN'|'LESS_THAN_OR_EQUALS' $operator
 * @property AgenticRetrieveMemoryMetadataFilterRight|null $right
 */
class AgenticRetrieveMemoryMetadataFilter extends Shape
{
    /**
     * @param array{
     *     left: AgenticRetrieveMemoryMetadataFilterLeft,
     *     operator: 'EQUALS_TO'|'EXISTS'|'NOT_EXISTS'|'BEFORE'|'AFTER'|'CONTAINS'|'GREATER_THAN'|'GREATER_THAN_OR_EQUALS'|'LESS_THAN'|'LESS_THAN_OR_EQUALS',
     *     right?: AgenticRetrieveMemoryMetadataFilterRight|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

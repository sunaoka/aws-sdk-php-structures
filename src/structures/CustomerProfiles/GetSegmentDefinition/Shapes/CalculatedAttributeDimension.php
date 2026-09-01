<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetSegmentDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INCLUSIVE'|'EXCLUSIVE'|'CONTAINS'|'BEGINS_WITH'|'ENDS_WITH'|'BEFORE'|'AFTER'|'BETWEEN'|'NOT_BETWEEN'|'ON'|'GREATER_THAN'|'LESS_THAN'|'GREATER_THAN_OR_EQUAL'|'LESS_THAN_OR_EQUAL'|'EQUAL'|'LIST_CONTAINS'|'LIST_CONTAINS_ALL' $DimensionType
 * @property list<string> $Values
 * @property ConditionOverrides|null $ConditionOverrides
 */
class CalculatedAttributeDimension extends Shape
{
    /**
     * @param array{
     *     DimensionType: 'INCLUSIVE'|'EXCLUSIVE'|'CONTAINS'|'BEGINS_WITH'|'ENDS_WITH'|'BEFORE'|'AFTER'|'BETWEEN'|'NOT_BETWEEN'|'ON'|'GREATER_THAN'|'LESS_THAN'|'GREATER_THAN_OR_EQUAL'|'LESS_THAN_OR_EQUAL'|'EQUAL'|'LIST_CONTAINS'|'LIST_CONTAINS_ALL',
     *     Values: list<string>,
     *     ConditionOverrides?: ConditionOverrides|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

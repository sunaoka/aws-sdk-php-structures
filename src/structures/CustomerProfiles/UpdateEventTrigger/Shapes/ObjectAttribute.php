<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\UpdateEventTrigger\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Source
 * @property string|null $FieldName
 * @property 'INCLUSIVE'|'EXCLUSIVE'|'CONTAINS'|'BEGINS_WITH'|'ENDS_WITH'|'GREATER_THAN'|'LESS_THAN'|'GREATER_THAN_OR_EQUAL'|'LESS_THAN_OR_EQUAL'|'EQUAL'|'BEFORE'|'AFTER'|'ON'|'BETWEEN'|'NOT_BETWEEN' $ComparisonOperator
 * @property list<string> $Values
 */
class ObjectAttribute extends Shape
{
    /**
     * @param array{
     *     Source?: string|null,
     *     FieldName?: string|null,
     *     ComparisonOperator: 'INCLUSIVE'|'EXCLUSIVE'|'CONTAINS'|'BEGINS_WITH'|'ENDS_WITH'|'GREATER_THAN'|'LESS_THAN'|'GREATER_THAN_OR_EQUAL'|'LESS_THAN_OR_EQUAL'|'EQUAL'|'BEFORE'|'AFTER'|'ON'|'BETWEEN'|'NOT_BETWEEN',
     *     Values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

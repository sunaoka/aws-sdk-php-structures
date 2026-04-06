<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetSegmentDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INCLUSIVE'|'EXCLUSIVE'|'CONTAINS'|'BEGINS_WITH'|'ENDS_WITH'|'BEFORE'|'AFTER'|'BETWEEN'|'NOT_BETWEEN'|'ON'|'GREATER_THAN'|'LESS_THAN'|'GREATER_THAN_OR_EQUAL'|'LESS_THAN_OR_EQUAL'|'EQUAL' $DimensionType
 * @property list<string> $Values
 */
class AttributeDimension extends Shape
{
    /**
     * @param array{
     *     DimensionType: 'INCLUSIVE'|'EXCLUSIVE'|'CONTAINS'|'BEGINS_WITH'|'ENDS_WITH'|'BEFORE'|'AFTER'|'BETWEEN'|'NOT_BETWEEN'|'ON'|'GREATER_THAN'|'LESS_THAN'|'GREATER_THAN_OR_EQUAL'|'LESS_THAN_OR_EQUAL'|'EQUAL',
     *     Values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Glue\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GroupName
 * @property list<FilterExpression> $Filters
 * @property 'AND'|'OR' $LogicalOperator
 */
class GroupFilters extends Shape
{
    /**
     * @param array{
     *     GroupName: string,
     *     Filters: list<FilterExpression>,
     *     LogicalOperator: 'AND'|'OR'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Glue\GetJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<string> $Inputs
 * @property 'AND'|'OR' $LogicalOperator
 * @property list<FilterExpression> $Filters
 */
class Filter extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Inputs: list<string>,
     *     LogicalOperator: 'AND'|'OR',
     *     Filters: list<FilterExpression>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

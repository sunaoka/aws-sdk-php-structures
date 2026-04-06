<?php

namespace Sunaoka\Aws\Structures\SsmSap\ListOperationEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Value
 * @property 'Equals'|'GreaterThanOrEquals'|'LessThanOrEquals' $Operator
 */
class Filter extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Value: string,
     *     Operator: 'Equals'|'GreaterThanOrEquals'|'LessThanOrEquals'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

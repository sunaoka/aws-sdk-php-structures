<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property 'Equals'|'NotEquals'|'GreaterThan'|'GreaterThanOrEqualTo'|'LessThan'|'LessThanOrEqualTo'|'Contains'|'Exists'|'NotExists'|'In'|null $Operator
 * @property string|null $Value
 */
class Filter extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Operator?: 'Equals'|'NotEquals'|'GreaterThan'|'GreaterThanOrEqualTo'|'LessThan'|'LessThanOrEqualTo'|'Contains'|'Exists'|'NotExists'|'In'|null,
     *     Value?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

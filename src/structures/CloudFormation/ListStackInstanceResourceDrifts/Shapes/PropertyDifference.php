<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListStackInstanceResourceDrifts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PropertyPath
 * @property string $ExpectedValue
 * @property string $ActualValue
 * @property 'ADD'|'REMOVE'|'NOT_EQUAL' $DifferenceType
 */
class PropertyDifference extends Shape
{
    /**
     * @param array{
     *     PropertyPath: string,
     *     ExpectedValue: string,
     *     ActualValue: string,
     *     DifferenceType: 'ADD'|'REMOVE'|'NOT_EQUAL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

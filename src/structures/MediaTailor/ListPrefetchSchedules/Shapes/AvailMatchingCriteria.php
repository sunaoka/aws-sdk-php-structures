<?php

namespace Sunaoka\Aws\Structures\MediaTailor\ListPrefetchSchedules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DynamicVariable
 * @property 'EQUALS' $Operator
 */
class AvailMatchingCriteria extends Shape
{
    /**
     * @param array{
     *     DynamicVariable: string,
     *     Operator: 'EQUALS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

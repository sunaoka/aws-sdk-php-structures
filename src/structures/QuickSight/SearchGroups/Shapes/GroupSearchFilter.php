<?php

namespace Sunaoka\Aws\Structures\QuickSight\SearchGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'StartsWith' $Operator
 * @property 'GROUP_NAME' $Name
 * @property string $Value
 */
class GroupSearchFilter extends Shape
{
    /**
     * @param array{
     *     Operator: 'StartsWith',
     *     Name: 'GROUP_NAME',
     *     Value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

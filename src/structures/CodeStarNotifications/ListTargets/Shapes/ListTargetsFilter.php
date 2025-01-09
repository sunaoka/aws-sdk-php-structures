<?php

namespace Sunaoka\Aws\Structures\CodeStarNotifications\ListTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TARGET_TYPE'|'TARGET_ADDRESS'|'TARGET_STATUS' $Name
 * @property string $Value
 */
class ListTargetsFilter extends Shape
{
    /**
     * @param array{
     *     Name: 'TARGET_TYPE'|'TARGET_ADDRESS'|'TARGET_STATUS',
     *     Value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\CodeStarNotifications\ListEventTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RESOURCE_TYPE'|'SERVICE_NAME' $Name
 * @property string $Value
 */
class ListEventTypesFilter extends Shape
{
    /**
     * @param array{
     *     Name: 'RESOURCE_TYPE'|'SERVICE_NAME',
     *     Value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

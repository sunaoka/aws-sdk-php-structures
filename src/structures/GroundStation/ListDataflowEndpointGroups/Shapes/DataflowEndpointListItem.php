<?php

namespace Sunaoka\Aws\Structures\GroundStation\ListDataflowEndpointGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $dataflowEndpointGroupId
 * @property string|null $dataflowEndpointGroupArn
 */
class DataflowEndpointListItem extends Shape
{
    /**
     * @param array{
     *     dataflowEndpointGroupId?: string|null,
     *     dataflowEndpointGroupArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

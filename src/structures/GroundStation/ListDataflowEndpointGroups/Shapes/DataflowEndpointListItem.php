<?php

namespace Sunaoka\Aws\Structures\GroundStation\ListDataflowEndpointGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $dataflowEndpointGroupArn
 * @property string|null $dataflowEndpointGroupId
 */
class DataflowEndpointListItem extends Shape
{
    /**
     * @param array{
     *     dataflowEndpointGroupArn?: string|null,
     *     dataflowEndpointGroupId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\GroundStation\ListDataflowEndpointGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $dataflowEndpointGroupArn
 * @property string $dataflowEndpointGroupId
 */
class DataflowEndpointListItem extends Shape
{
    /**
     * @param array{
     *     dataflowEndpointGroupArn?: string,
     *     dataflowEndpointGroupId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

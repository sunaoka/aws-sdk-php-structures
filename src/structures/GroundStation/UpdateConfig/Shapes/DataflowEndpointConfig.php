<?php

namespace Sunaoka\Aws\Structures\GroundStation\UpdateConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $dataflowEndpointName
 * @property string $dataflowEndpointRegion
 */
class DataflowEndpointConfig extends Shape
{
    /**
     * @param array{
     *     dataflowEndpointName: string,
     *     dataflowEndpointRegion?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

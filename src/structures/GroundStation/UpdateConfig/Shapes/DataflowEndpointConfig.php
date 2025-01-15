<?php

namespace Sunaoka\Aws\Structures\GroundStation\UpdateConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $dataflowEndpointName
 * @property string|null $dataflowEndpointRegion
 */
class DataflowEndpointConfig extends Shape
{
    /**
     * @param array{
     *     dataflowEndpointName: string,
     *     dataflowEndpointRegion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

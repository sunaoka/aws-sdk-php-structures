<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\CreateGraph\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProvisionedGraphConfiguration|null $provisionedGraph
 * @property GraphSessionConfiguration|null $graphSession
 */
class ComputeConfiguration extends Shape
{
    /**
     * @param array{
     *     provisionedGraph?: ProvisionedGraphConfiguration|null,
     *     graphSession?: GraphSessionConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

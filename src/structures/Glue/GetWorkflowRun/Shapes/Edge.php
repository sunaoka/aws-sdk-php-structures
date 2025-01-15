<?php

namespace Sunaoka\Aws\Structures\Glue\GetWorkflowRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SourceId
 * @property string|null $DestinationId
 */
class Edge extends Shape
{
    /**
     * @param array{
     *     SourceId?: string|null,
     *     DestinationId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

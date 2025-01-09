<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetWorkflows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceId
 * @property string $DestinationId
 */
class Edge extends Shape
{
    /**
     * @param array{
     *     SourceId?: string,
     *     DestinationId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\DataZone\GetLineageNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $eventTimestamp
 * @property string $id
 */
class LineageNodeReference extends Shape
{
    /**
     * @param array{
     *     eventTimestamp?: \Aws\Api\DateTimeResult,
     *     id?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

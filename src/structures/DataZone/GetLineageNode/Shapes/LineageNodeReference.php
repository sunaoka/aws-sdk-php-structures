<?php

namespace Sunaoka\Aws\Structures\DataZone\GetLineageNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property \Aws\Api\DateTimeResult|null $eventTimestamp
 */
class LineageNodeReference extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     eventTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

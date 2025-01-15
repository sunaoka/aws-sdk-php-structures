<?php

namespace Sunaoka\Aws\Structures\DataZone\GetLineageNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $eventTimestamp
 * @property string|null $id
 */
class LineageNodeReference extends Shape
{
    /**
     * @param array{
     *     eventTimestamp?: \Aws\Api\DateTimeResult|null,
     *     id?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

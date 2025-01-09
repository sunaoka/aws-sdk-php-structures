<?php

namespace Sunaoka\Aws\Structures\Pinpoint\PutEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, EventsBatch> $BatchItem
 */
class EventsRequest extends Shape
{
    /**
     * @param array{BatchItem: array<string, EventsBatch>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

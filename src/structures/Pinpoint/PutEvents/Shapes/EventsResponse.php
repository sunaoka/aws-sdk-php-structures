<?php

namespace Sunaoka\Aws\Structures\Pinpoint\PutEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, ItemResponse> $Results
 */
class EventsResponse extends Shape
{
    /**
     * @param array{Results?: array<string, ItemResponse>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

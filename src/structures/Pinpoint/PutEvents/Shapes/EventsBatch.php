<?php

namespace Sunaoka\Aws\Structures\Pinpoint\PutEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PublicEndpoint $Endpoint
 * @property array<string, Event> $Events
 */
class EventsBatch extends Shape
{
    /**
     * @param array{
     *     Endpoint: PublicEndpoint,
     *     Events: array<string, Event>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

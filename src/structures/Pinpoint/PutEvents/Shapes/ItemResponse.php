<?php

namespace Sunaoka\Aws\Structures\Pinpoint\PutEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EndpointItemResponse $EndpointItemResponse
 * @property array<string, EventItemResponse> $EventsItemResponse
 */
class ItemResponse extends Shape
{
    /**
     * @param array{
     *     EndpointItemResponse?: EndpointItemResponse,
     *     EventsItemResponse?: array<string, EventItemResponse>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Pinpoint\PutEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EndpointItemResponse|null $EndpointItemResponse
 * @property array<string, EventItemResponse>|null $EventsItemResponse
 */
class ItemResponse extends Shape
{
    /**
     * @param array{
     *     EndpointItemResponse?: EndpointItemResponse|null,
     *     EventsItemResponse?: array<string, EventItemResponse>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

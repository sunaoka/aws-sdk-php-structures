<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateUserEndpointsBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<EndpointBatchItem> $Item
 */
class EndpointBatchRequest extends Shape
{
    /**
     * @param array{Item: list<EndpointBatchItem>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

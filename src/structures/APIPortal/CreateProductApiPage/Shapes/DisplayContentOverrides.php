<?php

namespace Sunaoka\Aws\Structures\APIPortal\CreateProductApiPage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $operationName
 * @property string|null $apiUrl
 * @property string|null $body
 */
class DisplayContentOverrides extends Shape
{
    /**
     * @param array{
     *     operationName?: string|null,
     *     apiUrl?: string|null,
     *     body?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

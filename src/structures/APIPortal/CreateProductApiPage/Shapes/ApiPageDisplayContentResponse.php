<?php

namespace Sunaoka\Aws\Structures\APIPortal\CreateProductApiPage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $operationName
 * @property string $apiUrl
 * @property string|null $body
 */
class ApiPageDisplayContentResponse extends Shape
{
    /**
     * @param array{
     *     operationName?: string|null,
     *     apiUrl: string,
     *     body?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Iot\TestInvokeAuthorizer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $headers
 * @property string $queryString
 */
class HttpContext extends Shape
{
    /**
     * @param array{
     *     headers?: array<string, string>,
     *     queryString?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

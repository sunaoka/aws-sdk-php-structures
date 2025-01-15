<?php

namespace Sunaoka\Aws\Structures\Iot\TestInvokeAuthorizer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $headers
 * @property string|null $queryString
 */
class HttpContext extends Shape
{
    /**
     * @param array{
     *     headers?: array<string, string>|null,
     *     queryString?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

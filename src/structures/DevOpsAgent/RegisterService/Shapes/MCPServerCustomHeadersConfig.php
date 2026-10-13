<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\RegisterService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $headers
 */
class MCPServerCustomHeadersConfig extends Shape
{
    /**
     * @param array{headers: array<string, string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

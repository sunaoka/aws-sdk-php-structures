<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DescribeApplicationProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, ResourceServerScopeDetails> $Scopes
 */
class ResourceServerConfig extends Shape
{
    /**
     * @param array{Scopes?: array<string, ResourceServerScopeDetails>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

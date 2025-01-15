<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DescribeApplicationProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, ResourceServerScopeDetails>|null $Scopes
 */
class ResourceServerConfig extends Shape
{
    /**
     * @param array{Scopes?: array<string, ResourceServerScopeDetails>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

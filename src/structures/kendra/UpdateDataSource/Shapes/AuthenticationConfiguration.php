<?php

namespace Sunaoka\Aws\Structures\kendra\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<BasicAuthenticationConfiguration> $BasicAuthentication
 */
class AuthenticationConfiguration extends Shape
{
    /**
     * @param array{BasicAuthentication?: list<BasicAuthenticationConfiguration>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

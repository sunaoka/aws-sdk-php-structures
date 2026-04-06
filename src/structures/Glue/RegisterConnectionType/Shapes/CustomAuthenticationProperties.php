<?php

namespace Sunaoka\Aws\Structures\Glue\RegisterConnectionType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ConnectorProperty> $AuthenticationParameters
 */
class CustomAuthenticationProperties extends Shape
{
    /**
     * @param array{AuthenticationParameters: list<ConnectorProperty>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

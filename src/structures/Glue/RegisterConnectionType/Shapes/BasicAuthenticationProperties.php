<?php

namespace Sunaoka\Aws\Structures\Glue\RegisterConnectionType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConnectorProperty|null $Username
 * @property ConnectorProperty|null $Password
 */
class BasicAuthenticationProperties extends Shape
{
    /**
     * @param array{
     *     Username?: ConnectorProperty|null,
     *     Password?: ConnectorProperty|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\CreateNetwork\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NetworkFabricConfiguration $Fabric
 */
class NetworkFrameworkConfiguration extends Shape
{
    /**
     * @param array{Fabric?: NetworkFabricConfiguration} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

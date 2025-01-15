<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\CreateNetwork\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NetworkFabricConfiguration|null $Fabric
 */
class NetworkFrameworkConfiguration extends Shape
{
    /**
     * @param array{Fabric?: NetworkFabricConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

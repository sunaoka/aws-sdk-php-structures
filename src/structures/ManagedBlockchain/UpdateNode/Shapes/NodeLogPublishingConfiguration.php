<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\UpdateNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NodeFabricLogPublishingConfiguration|null $Fabric
 */
class NodeLogPublishingConfiguration extends Shape
{
    /**
     * @param array{Fabric?: NodeFabricLogPublishingConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\PCS\GetComputeNodeGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<NodeLifecycleScript>|null $nodeBootstrapped
 * @property list<NodeLifecycleScript>|null $nodeReady
 */
class NodeLifecycleStages extends Shape
{
    /**
     * @param array{
     *     nodeBootstrapped?: list<NodeLifecycleScript>|null,
     *     nodeReady?: list<NodeLifecycleScript>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

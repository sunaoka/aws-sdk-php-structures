<?php

namespace Sunaoka\Aws\Structures\EKS\RegisterCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $minPort
 * @property int|null $maxPort
 */
class ServiceNodePortRange extends Shape
{
    /**
     * @param array{
     *     minPort?: int|null,
     *     maxPort?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

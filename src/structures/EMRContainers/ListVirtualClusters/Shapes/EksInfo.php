<?php

namespace Sunaoka\Aws\Structures\EMRContainers\ListVirtualClusters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $namespace
 */
class EksInfo extends Shape
{
    /**
     * @param array{namespace?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

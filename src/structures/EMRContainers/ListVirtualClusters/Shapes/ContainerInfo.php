<?php

namespace Sunaoka\Aws\Structures\EMRContainers\ListVirtualClusters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EksInfo|null $eksInfo
 */
class ContainerInfo extends Shape
{
    /**
     * @param array{eksInfo?: EksInfo|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

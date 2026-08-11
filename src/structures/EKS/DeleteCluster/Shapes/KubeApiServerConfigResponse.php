<?php

namespace Sunaoka\Aws\Structures\EKS\DeleteCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $eventTtl
 * @property ServiceNodePortRange|null $serviceNodePortRange
 */
class KubeApiServerConfigResponse extends Shape
{
    /**
     * @param array{
     *     eventTtl?: string|null,
     *     serviceNodePortRange?: ServiceNodePortRange|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

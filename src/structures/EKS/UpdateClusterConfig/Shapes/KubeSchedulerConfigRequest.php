<?php

namespace Sunaoka\Aws\Structures\EKS\UpdateClusterConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NodeResourcesFitConfig|null $nodeResourcesFit
 */
class KubeSchedulerConfigRequest extends Shape
{
    /**
     * @param array{nodeResourcesFit?: NodeResourcesFitConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

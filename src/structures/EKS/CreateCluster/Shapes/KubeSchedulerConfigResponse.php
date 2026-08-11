<?php

namespace Sunaoka\Aws\Structures\EKS\CreateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NodeResourcesFitConfig|null $nodeResourcesFit
 */
class KubeSchedulerConfigResponse extends Shape
{
    /**
     * @param array{nodeResourcesFit?: NodeResourcesFitConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

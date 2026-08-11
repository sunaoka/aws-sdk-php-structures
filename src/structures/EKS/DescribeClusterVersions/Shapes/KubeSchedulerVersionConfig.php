<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeClusterVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NodeResourcesFitVersionConfig|null $nodeResourcesFit
 */
class KubeSchedulerVersionConfig extends Shape
{
    /**
     * @param array{nodeResourcesFit?: NodeResourcesFitVersionConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

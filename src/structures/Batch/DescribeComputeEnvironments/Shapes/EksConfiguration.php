<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeComputeEnvironments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $eksClusterArn
 * @property string $kubernetesNamespace
 */
class EksConfiguration extends Shape
{
    /**
     * @param array{
     *     eksClusterArn: string,
     *     kubernetesNamespace: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

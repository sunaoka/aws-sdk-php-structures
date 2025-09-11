<?php

namespace Sunaoka\Aws\Structures\EMRContainers\DescribeVirtualCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $namespace
 * @property string|null $nodeLabel
 */
class EksInfo extends Shape
{
    /**
     * @param array{
     *     namespace?: string|null,
     *     nodeLabel?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

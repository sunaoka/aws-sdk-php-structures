<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BlockStorage $blockStorage
 */
class StorageConfigResponse extends Shape
{
    /**
     * @param array{blockStorage?: BlockStorage} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\EKS\CreateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BlockStorage $blockStorage
 */
class StorageConfigRequest extends Shape
{
    /**
     * @param array{blockStorage?: BlockStorage} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

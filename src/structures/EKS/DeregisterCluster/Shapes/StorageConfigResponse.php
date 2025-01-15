<?php

namespace Sunaoka\Aws\Structures\EKS\DeregisterCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BlockStorage|null $blockStorage
 */
class StorageConfigResponse extends Shape
{
    /**
     * @param array{blockStorage?: BlockStorage|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\EKS\RegisterCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $enabled
 */
class BlockStorage extends Shape
{
    /**
     * @param array{enabled?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

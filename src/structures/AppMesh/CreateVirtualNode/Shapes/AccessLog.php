<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateVirtualNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FileAccessLog $file
 */
class AccessLog extends Shape
{
    /**
     * @param array{file?: FileAccessLog} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

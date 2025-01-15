<?php

namespace Sunaoka\Aws\Structures\AppMesh\DeleteVirtualNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FileAccessLog|null $file
 */
class AccessLog extends Shape
{
    /**
     * @param array{file?: FileAccessLog|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

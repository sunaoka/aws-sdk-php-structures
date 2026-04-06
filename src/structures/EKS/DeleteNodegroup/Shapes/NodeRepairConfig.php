<?php

namespace Sunaoka\Aws\Structures\EKS\DeleteNodegroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $enabled
 */
class NodeRepairConfig extends Shape
{
    /**
     * @param array{enabled?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\EKS\DeleteCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $data
 */
class Certificate extends Shape
{
    /**
     * @param array{data?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

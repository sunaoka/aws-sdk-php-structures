<?php

namespace Sunaoka\Aws\Structures\EKS\RegisterCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $data
 */
class Certificate extends Shape
{
    /**
     * @param array{data?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\EKS\CreateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $keyArn
 */
class Provider extends Shape
{
    /**
     * @param array{keyArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

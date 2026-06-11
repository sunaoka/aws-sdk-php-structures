<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'host'|'rack'|null $spreadLevel
 */
class EtcdPlacementResponse extends Shape
{
    /**
     * @param array{spreadLevel?: 'host'|'rack'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

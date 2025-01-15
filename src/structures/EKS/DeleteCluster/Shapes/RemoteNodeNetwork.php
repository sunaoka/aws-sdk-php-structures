<?php

namespace Sunaoka\Aws\Structures\EKS\DeleteCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $cidrs
 */
class RemoteNodeNetwork extends Shape
{
    /**
     * @param array{cidrs?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

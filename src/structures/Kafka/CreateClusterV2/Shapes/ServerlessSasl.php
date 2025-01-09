<?php

namespace Sunaoka\Aws\Structures\Kafka\CreateClusterV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Iam $Iam
 */
class ServerlessSasl extends Shape
{
    /**
     * @param array{Iam?: Iam} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

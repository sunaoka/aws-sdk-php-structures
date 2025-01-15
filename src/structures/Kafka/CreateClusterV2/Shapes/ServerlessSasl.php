<?php

namespace Sunaoka\Aws\Structures\Kafka\CreateClusterV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Iam|null $Iam
 */
class ServerlessSasl extends Shape
{
    /**
     * @param array{Iam?: Iam|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

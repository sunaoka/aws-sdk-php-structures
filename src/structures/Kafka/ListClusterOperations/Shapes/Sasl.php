<?php

namespace Sunaoka\Aws\Structures\Kafka\ListClusterOperations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Scram $Scram
 * @property Iam $Iam
 */
class Sasl extends Shape
{
    /**
     * @param array{
     *     Scram?: Scram,
     *     Iam?: Iam
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

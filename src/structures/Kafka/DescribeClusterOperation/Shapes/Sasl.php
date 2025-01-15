<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeClusterOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Scram|null $Scram
 * @property Iam|null $Iam
 */
class Sasl extends Shape
{
    /**
     * @param array{
     *     Scram?: Scram|null,
     *     Iam?: Iam|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

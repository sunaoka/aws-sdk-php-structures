<?php

namespace Sunaoka\Aws\Structures\Kafka\CreateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Type
 */
class PublicAccess extends Shape
{
    /**
     * @param array{Type?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

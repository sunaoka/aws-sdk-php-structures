<?php

namespace Sunaoka\Aws\Structures\Kafka\ListClusterOperations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Type
 */
class PublicAccess extends Shape
{
    /**
     * @param array{Type?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

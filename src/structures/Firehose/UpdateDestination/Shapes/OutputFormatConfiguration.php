<?php

namespace Sunaoka\Aws\Structures\Firehose\UpdateDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Serializer $Serializer
 */
class OutputFormatConfiguration extends Shape
{
    /**
     * @param array{Serializer?: Serializer} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

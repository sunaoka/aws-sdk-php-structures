<?php

namespace Sunaoka\Aws\Structures\Firehose\UpdateDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Deserializer $Deserializer
 */
class InputFormatConfiguration extends Shape
{
    /**
     * @param array{Deserializer?: Deserializer} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

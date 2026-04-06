<?php

namespace Sunaoka\Aws\Structures\Lambda\UpdateEventSourceMapping\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'KEY'|'VALUE'|null $Attribute
 */
class KafkaSchemaValidationConfig extends Shape
{
    /**
     * @param array{Attribute?: 'KEY'|'VALUE'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

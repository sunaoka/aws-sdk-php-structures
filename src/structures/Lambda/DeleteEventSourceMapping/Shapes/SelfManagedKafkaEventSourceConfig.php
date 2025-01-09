<?php

namespace Sunaoka\Aws\Structures\Lambda\DeleteEventSourceMapping\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ConsumerGroupId
 */
class SelfManagedKafkaEventSourceConfig extends Shape
{
    /**
     * @param array{ConsumerGroupId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

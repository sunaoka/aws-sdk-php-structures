<?php

namespace Sunaoka\Aws\Structures\Lambda\DeleteEventSourceMapping\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ConsumerGroupId
 */
class SelfManagedKafkaEventSourceConfig extends Shape
{
    /**
     * @param array{ConsumerGroupId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

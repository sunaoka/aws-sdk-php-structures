<?php

namespace Sunaoka\Aws\Structures\Lambda\CreateEventSourceMapping\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ConsumerGroupId
 */
class AmazonManagedKafkaEventSourceConfig extends Shape
{
    /**
     * @param array{ConsumerGroupId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

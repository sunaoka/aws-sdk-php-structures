<?php

namespace Sunaoka\Aws\Structures\ElastiCache\TestMigration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DeliveryStream
 */
class KinesisFirehoseDestinationDetails extends Shape
{
    /**
     * @param array{DeliveryStream?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

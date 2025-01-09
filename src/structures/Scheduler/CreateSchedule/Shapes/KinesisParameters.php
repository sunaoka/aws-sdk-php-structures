<?php

namespace Sunaoka\Aws\Structures\Scheduler\CreateSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PartitionKey
 */
class KinesisParameters extends Shape
{
    /**
     * @param array{PartitionKey: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

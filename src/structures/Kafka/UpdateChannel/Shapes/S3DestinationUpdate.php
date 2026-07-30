<?php

namespace Sunaoka\Aws\Structures\Kafka\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $DataFreshnessInSeconds
 */
class S3DestinationUpdate extends Shape
{
    /**
     * @param array{DataFreshnessInSeconds: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

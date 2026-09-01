<?php

namespace Sunaoka\Aws\Structures\Kinesis\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $DataFreshnessInSeconds
 */
class S3DestinationUpdateInput extends Shape
{
    /**
     * @param array{DataFreshnessInSeconds: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

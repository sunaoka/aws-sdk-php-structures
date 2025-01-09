<?php

namespace Sunaoka\Aws\Structures\Firehose\CreateDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $DurationInSeconds
 */
class RedshiftRetryOptions extends Shape
{
    /**
     * @param array{DurationInSeconds?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

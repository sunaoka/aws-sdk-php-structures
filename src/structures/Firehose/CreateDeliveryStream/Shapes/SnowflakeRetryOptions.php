<?php

namespace Sunaoka\Aws\Structures\Firehose\CreateDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 7200> $DurationInSeconds
 */
class SnowflakeRetryOptions extends Shape
{
    /**
     * @param array{DurationInSeconds?: int<0, 7200>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

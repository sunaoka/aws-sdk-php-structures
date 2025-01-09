<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $DurationInSeconds
 * @property \Aws\Api\DateTimeResult $ExpiryTimestamp
 */
class Expiry extends Shape
{
    /**
     * @param array{
     *     DurationInSeconds?: int,
     *     ExpiryTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

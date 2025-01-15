<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $DurationInSeconds
 * @property \Aws\Api\DateTimeResult|null $ExpiryTimestamp
 */
class Expiry extends Shape
{
    /**
     * @param array{
     *     DurationInSeconds?: int|null,
     *     ExpiryTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

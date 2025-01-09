<?php

namespace Sunaoka\Aws\Structures\Shield\ListAttacks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $FromInclusive
 * @property \Aws\Api\DateTimeResult $ToExclusive
 */
class TimeRange extends Shape
{
    /**
     * @param array{
     *     FromInclusive?: \Aws\Api\DateTimeResult,
     *     ToExclusive?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

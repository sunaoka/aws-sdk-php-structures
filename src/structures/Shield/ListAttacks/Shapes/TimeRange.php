<?php

namespace Sunaoka\Aws\Structures\Shield\ListAttacks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $FromInclusive
 * @property \Aws\Api\DateTimeResult|null $ToExclusive
 */
class TimeRange extends Shape
{
    /**
     * @param array{
     *     FromInclusive?: \Aws\Api\DateTimeResult|null,
     *     ToExclusive?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

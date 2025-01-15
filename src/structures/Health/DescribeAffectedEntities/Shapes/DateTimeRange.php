<?php

namespace Sunaoka\Aws\Structures\Health\DescribeAffectedEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $from
 * @property \Aws\Api\DateTimeResult|null $to
 */
class DateTimeRange extends Shape
{
    /**
     * @param array{
     *     from?: \Aws\Api\DateTimeResult|null,
     *     to?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

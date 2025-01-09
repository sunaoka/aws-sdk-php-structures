<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeAggregateIdFormat\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $Deadline
 * @property string $Resource
 * @property bool $UseLongIds
 */
class IdFormat extends Shape
{
    /**
     * @param array{
     *     Deadline?: \Aws\Api\DateTimeResult,
     *     Resource?: string,
     *     UseLongIds?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

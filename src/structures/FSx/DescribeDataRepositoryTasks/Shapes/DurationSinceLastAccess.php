<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeDataRepositoryTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DAYS' $Unit
 * @property int $Value
 */
class DurationSinceLastAccess extends Shape
{
    /**
     * @param array{
     *     Unit?: 'DAYS',
     *     Value?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

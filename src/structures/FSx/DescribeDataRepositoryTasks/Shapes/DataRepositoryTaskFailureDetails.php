<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeDataRepositoryTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Message
 */
class DataRepositoryTaskFailureDetails extends Shape
{
    /**
     * @param array{Message?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

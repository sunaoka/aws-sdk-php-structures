<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeTaskExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $AtSource
 * @property int $AtDestinationForDelete
 */
class TaskExecutionFilesListedDetail extends Shape
{
    /**
     * @param array{
     *     AtSource?: int,
     *     AtDestinationForDelete?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

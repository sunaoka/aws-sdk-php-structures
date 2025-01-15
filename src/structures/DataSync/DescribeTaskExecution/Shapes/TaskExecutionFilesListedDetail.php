<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeTaskExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $AtSource
 * @property int|null $AtDestinationForDelete
 */
class TaskExecutionFilesListedDetail extends Shape
{
    /**
     * @param array{
     *     AtSource?: int|null,
     *     AtDestinationForDelete?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

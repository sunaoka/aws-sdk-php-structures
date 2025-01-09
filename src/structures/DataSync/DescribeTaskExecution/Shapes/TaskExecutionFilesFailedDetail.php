<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeTaskExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Prepare
 * @property int $Transfer
 * @property int $Verify
 * @property int $Delete
 */
class TaskExecutionFilesFailedDetail extends Shape
{
    /**
     * @param array{
     *     Prepare?: int,
     *     Transfer?: int,
     *     Verify?: int,
     *     Delete?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

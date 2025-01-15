<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeTaskExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Prepare
 * @property int|null $Transfer
 * @property int|null $Verify
 * @property int|null $Delete
 */
class TaskExecutionFilesFailedDetail extends Shape
{
    /**
     * @param array{
     *     Prepare?: int|null,
     *     Transfer?: int|null,
     *     Verify?: int|null,
     *     Delete?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeTaskExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $List
 * @property int|null $Prepare
 * @property int|null $Transfer
 * @property int|null $Verify
 * @property int|null $Delete
 */
class TaskExecutionFoldersFailedDetail extends Shape
{
    /**
     * @param array{
     *     List?: int|null,
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

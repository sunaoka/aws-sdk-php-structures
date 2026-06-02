<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Starting'|'Downloading'|'Training'|'Uploading'|'Stopping'|'Stopped'|'MaxRuntimeExceeded'|'Interrupted'|'Failed'|'Completed'|'Restarting'|'Pending'|'Evaluating'|'Deleting'|'DeleteFailed' $Status
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property string|null $StatusMessage
 */
class JobSecondaryStatusTransition extends Shape
{
    /**
     * @param array{
     *     Status: 'Starting'|'Downloading'|'Training'|'Uploading'|'Stopping'|'Stopped'|'MaxRuntimeExceeded'|'Interrupted'|'Failed'|'Completed'|'Restarting'|'Pending'|'Evaluating'|'Deleting'|'DeleteFailed',
     *     StartTime: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     StatusMessage?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

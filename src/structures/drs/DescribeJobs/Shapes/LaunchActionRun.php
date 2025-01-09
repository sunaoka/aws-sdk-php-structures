<?php

namespace Sunaoka\Aws\Structures\drs\DescribeJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LaunchAction $action
 * @property string $failureReason
 * @property string $runId
 * @property 'IN_PROGRESS'|'SUCCEEDED'|'FAILED' $status
 */
class LaunchActionRun extends Shape
{
    /**
     * @param array{
     *     action?: LaunchAction,
     *     failureReason?: string,
     *     runId?: string,
     *     status?: 'IN_PROGRESS'|'SUCCEEDED'|'FAILED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

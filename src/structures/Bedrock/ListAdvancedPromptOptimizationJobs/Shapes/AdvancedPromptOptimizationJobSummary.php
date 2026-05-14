<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListAdvancedPromptOptimizationJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $jobArn
 * @property string $jobName
 * @property 'InProgress'|'Completed'|'Failed'|'PartiallyCompleted'|'Stopping'|'Stopped'|'Deleting' $jobStatus
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult|null $lastModifiedTime
 */
class AdvancedPromptOptimizationJobSummary extends Shape
{
    /**
     * @param array{
     *     jobArn: string,
     *     jobName: string,
     *     jobStatus: 'InProgress'|'Completed'|'Failed'|'PartiallyCompleted'|'Stopping'|'Stopped'|'Deleting',
     *     creationTime: \Aws\Api\DateTimeResult,
     *     lastModifiedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

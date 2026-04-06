<?php

namespace Sunaoka\Aws\Structures\Amplify\StartJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $jobArn
 * @property string $jobId
 * @property string $commitId
 * @property string $commitMessage
 * @property \Aws\Api\DateTimeResult $commitTime
 * @property \Aws\Api\DateTimeResult $startTime
 * @property 'PENDING'|'PROVISIONING'|'RUNNING'|'FAILED'|'SUCCEED'|'CANCELLING'|'CANCELLED' $status
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property 'RELEASE'|'RETRY'|'MANUAL'|'WEB_HOOK' $jobType
 */
class JobSummary extends Shape
{
    /**
     * @param array{
     *     jobArn: string,
     *     jobId: string,
     *     commitId: string,
     *     commitMessage: string,
     *     commitTime: \Aws\Api\DateTimeResult,
     *     startTime: \Aws\Api\DateTimeResult,
     *     status: 'PENDING'|'PROVISIONING'|'RUNNING'|'FAILED'|'SUCCEED'|'CANCELLING'|'CANCELLED',
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     jobType: 'RELEASE'|'RETRY'|'MANUAL'|'WEB_HOOK'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

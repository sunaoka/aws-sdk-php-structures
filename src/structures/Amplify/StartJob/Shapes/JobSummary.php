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
 * @property 'CREATED'|'PENDING'|'PROVISIONING'|'RUNNING'|'FAILED'|'SUCCEED'|'CANCELLING'|'CANCELLED' $status
 * @property \Aws\Api\DateTimeResult $endTime
 * @property 'RELEASE'|'RETRY'|'MANUAL'|'WEB_HOOK' $jobType
 * @property string $sourceUrl
 * @property 'ZIP'|'BUCKET_PREFIX' $sourceUrlType
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
     *     status: 'CREATED'|'PENDING'|'PROVISIONING'|'RUNNING'|'FAILED'|'SUCCEED'|'CANCELLING'|'CANCELLED',
     *     endTime?: \Aws\Api\DateTimeResult,
     *     jobType: 'RELEASE'|'RETRY'|'MANUAL'|'WEB_HOOK',
     *     sourceUrl?: string,
     *     sourceUrlType?: 'ZIP'|'BUCKET_PREFIX'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

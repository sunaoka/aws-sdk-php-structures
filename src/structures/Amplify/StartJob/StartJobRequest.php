<?php

namespace Sunaoka\Aws\Structures\Amplify\StartJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appId
 * @property string $branchName
 * @property string $jobId
 * @property 'RELEASE'|'RETRY'|'MANUAL'|'WEB_HOOK' $jobType
 * @property string $jobReason
 * @property string $commitId
 * @property string $commitMessage
 * @property \Aws\Api\DateTimeResult $commitTime
 */
class StartJobRequest extends Request
{
    /**
     * @param array{
     *     appId: string,
     *     branchName: string,
     *     jobId?: string,
     *     jobType: 'RELEASE'|'RETRY'|'MANUAL'|'WEB_HOOK',
     *     jobReason?: string,
     *     commitId?: string,
     *     commitMessage?: string,
     *     commitTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

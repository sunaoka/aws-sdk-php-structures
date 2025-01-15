<?php

namespace Sunaoka\Aws\Structures\Amplify\StartJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appId
 * @property string $branchName
 * @property string|null $jobId
 * @property 'RELEASE'|'RETRY'|'MANUAL'|'WEB_HOOK' $jobType
 * @property string|null $jobReason
 * @property string|null $commitId
 * @property string|null $commitMessage
 * @property \Aws\Api\DateTimeResult|null $commitTime
 */
class StartJobRequest extends Request
{
    /**
     * @param array{
     *     appId: string,
     *     branchName: string,
     *     jobId?: string|null,
     *     jobType: 'RELEASE'|'RETRY'|'MANUAL'|'WEB_HOOK',
     *     jobReason?: string|null,
     *     commitId?: string|null,
     *     commitMessage?: string|null,
     *     commitTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

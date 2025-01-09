<?php

namespace Sunaoka\Aws\Structures\EMRServerless\ListJobRunAttempts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $jobRunId
 * @property string $nextToken
 * @property int $maxResults
 */
class ListJobRunAttemptsRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     jobRunId: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

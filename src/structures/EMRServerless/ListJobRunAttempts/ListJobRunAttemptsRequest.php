<?php

namespace Sunaoka\Aws\Structures\EMRServerless\ListJobRunAttempts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $jobRunId
 * @property string $nextToken
 * @property int<1, 50> $maxResults
 */
class ListJobRunAttemptsRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     jobRunId: string,
     *     nextToken?: string,
     *     maxResults?: int<1, 50>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

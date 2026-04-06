<?php

namespace Sunaoka\Aws\Structures\EMRServerless\ListJobRunAttempts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $jobRunId
 * @property string|null $nextToken
 * @property int<1, 50>|null $maxResults
 */
class ListJobRunAttemptsRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     jobRunId: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 50>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

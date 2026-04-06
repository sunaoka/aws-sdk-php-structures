<?php

namespace Sunaoka\Aws\Structures\Deadline\ListJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property string|null $principalId
 * @property string $queueId
 */
class ListJobsRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     principalId?: string|null,
     *     queueId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Deadline\ListJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $principalId
 * @property string $queueId
 * @property string $nextToken
 * @property int<1, 100> $maxResults
 */
class ListJobsRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     principalId?: string,
     *     queueId: string,
     *     nextToken?: string,
     *     maxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

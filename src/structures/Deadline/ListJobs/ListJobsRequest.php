<?php

namespace Sunaoka\Aws\Structures\Deadline\ListJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $queueId
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 * @property string|null $principalId
 */
class ListJobsRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     queueId: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     principalId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

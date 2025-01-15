<?php

namespace Sunaoka\Aws\Structures\Deadline\ListJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string|null $principalId
 * @property string $queueId
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListJobsRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     principalId?: string|null,
     *     queueId: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

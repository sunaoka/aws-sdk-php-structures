<?php

namespace Sunaoka\Aws\Structures\mgn\ListRemoteSourceActionJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ListRemoteSourceActionJobsRequestFilters|null $filters
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 * @property string|null $accountID
 */
class ListRemoteSourceActionJobsRequest extends Request
{
    /**
     * @param array{
     *     filters?: Shapes\ListRemoteSourceActionJobsRequestFilters|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null,
     *     accountID?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

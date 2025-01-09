<?php

namespace Sunaoka\Aws\Structures\Amplify\ListJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appId
 * @property string $branchName
 * @property string $nextToken
 * @property int $maxResults
 */
class ListJobsRequest extends Request
{
    /**
     * @param array{
     *     appId: string,
     *     branchName: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

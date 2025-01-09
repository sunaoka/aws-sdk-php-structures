<?php

namespace Sunaoka\Aws\Structures\CodeCommit\ListPullRequests;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $repositoryName
 * @property string $authorArn
 * @property 'OPEN'|'CLOSED' $pullRequestStatus
 * @property string $nextToken
 * @property int $maxResults
 */
class ListPullRequestsRequest extends Request
{
    /**
     * @param array{
     *     repositoryName: string,
     *     authorArn?: string,
     *     pullRequestStatus?: 'OPEN'|'CLOSED',
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

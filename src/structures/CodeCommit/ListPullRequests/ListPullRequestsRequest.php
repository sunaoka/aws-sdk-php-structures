<?php

namespace Sunaoka\Aws\Structures\CodeCommit\ListPullRequests;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $repositoryName
 * @property string|null $authorArn
 * @property 'OPEN'|'CLOSED'|null $pullRequestStatus
 * @property string|null $nextToken
 * @property int|null $maxResults
 */
class ListPullRequestsRequest extends Request
{
    /**
     * @param array{
     *     repositoryName: string,
     *     authorArn?: string|null,
     *     pullRequestStatus?: 'OPEN'|'CLOSED'|null,
     *     nextToken?: string|null,
     *     maxResults?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

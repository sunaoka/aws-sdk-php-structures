<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetCommentsForPullRequest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $pullRequestId
 * @property string $repositoryName
 * @property string $beforeCommitId
 * @property string $afterCommitId
 * @property string $nextToken
 * @property int $maxResults
 */
class GetCommentsForPullRequestRequest extends Request
{
    /**
     * @param array{
     *     pullRequestId: string,
     *     repositoryName?: string,
     *     beforeCommitId?: string,
     *     afterCommitId?: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

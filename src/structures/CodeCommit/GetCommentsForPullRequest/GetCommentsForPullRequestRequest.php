<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetCommentsForPullRequest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $pullRequestId
 * @property string|null $repositoryName
 * @property string|null $beforeCommitId
 * @property string|null $afterCommitId
 * @property string|null $nextToken
 * @property int|null $maxResults
 */
class GetCommentsForPullRequestRequest extends Request
{
    /**
     * @param array{
     *     pullRequestId: string,
     *     repositoryName?: string|null,
     *     beforeCommitId?: string|null,
     *     afterCommitId?: string|null,
     *     nextToken?: string|null,
     *     maxResults?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\CodeCommit\PostCommentForPullRequest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $pullRequestId
 * @property string $repositoryName
 * @property string $beforeCommitId
 * @property string $afterCommitId
 * @property Shapes\Location|null $location
 * @property string $content
 * @property string|null $clientRequestToken
 */
class PostCommentForPullRequestRequest extends Request
{
    /**
     * @param array{
     *     pullRequestId: string,
     *     repositoryName: string,
     *     beforeCommitId: string,
     *     afterCommitId: string,
     *     location?: Shapes\Location|null,
     *     content: string,
     *     clientRequestToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

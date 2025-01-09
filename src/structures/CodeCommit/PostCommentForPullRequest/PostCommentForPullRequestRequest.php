<?php

namespace Sunaoka\Aws\Structures\CodeCommit\PostCommentForPullRequest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $pullRequestId
 * @property string $repositoryName
 * @property string $beforeCommitId
 * @property string $afterCommitId
 * @property Shapes\Location $location
 * @property string $content
 * @property string $clientRequestToken
 */
class PostCommentForPullRequestRequest extends Request
{
    /**
     * @param array{
     *     pullRequestId: string,
     *     repositoryName: string,
     *     beforeCommitId: string,
     *     afterCommitId: string,
     *     location?: Shapes\Location,
     *     content: string,
     *     clientRequestToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\CodeCommit\PostCommentForPullRequest;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $repositoryName
 * @property string $pullRequestId
 * @property string $beforeCommitId
 * @property string $afterCommitId
 * @property string $beforeBlobId
 * @property string $afterBlobId
 * @property Shapes\Location $location
 * @property Shapes\Comment $comment
 */
class PostCommentForPullRequestResponse extends Response
{
}

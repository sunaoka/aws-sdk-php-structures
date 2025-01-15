<?php

namespace Sunaoka\Aws\Structures\CodeCommit\PostCommentForPullRequest;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $repositoryName
 * @property string|null $pullRequestId
 * @property string|null $beforeCommitId
 * @property string|null $afterCommitId
 * @property string|null $beforeBlobId
 * @property string|null $afterBlobId
 * @property Shapes\Location|null $location
 * @property Shapes\Comment|null $comment
 */
class PostCommentForPullRequestResponse extends Response
{
}

<?php

namespace Sunaoka\Aws\Structures\CodeCommit\PostCommentForComparedCommit;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $repositoryName
 * @property string $beforeCommitId
 * @property string $afterCommitId
 * @property string $beforeBlobId
 * @property string $afterBlobId
 * @property Shapes\Location $location
 * @property Shapes\Comment $comment
 */
class PostCommentForComparedCommitResponse extends Response
{
}

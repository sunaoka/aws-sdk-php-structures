<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetCommentsForComparedCommit\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $repositoryName
 * @property string $beforeCommitId
 * @property string $afterCommitId
 * @property string $beforeBlobId
 * @property string $afterBlobId
 * @property Location $location
 * @property list<Comment> $comments
 */
class CommentsForComparedCommit extends Shape
{
    /**
     * @param array{
     *     repositoryName?: string,
     *     beforeCommitId?: string,
     *     afterCommitId?: string,
     *     beforeBlobId?: string,
     *     afterBlobId?: string,
     *     location?: Location,
     *     comments?: list<Comment>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

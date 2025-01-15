<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetCommentsForComparedCommit\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $repositoryName
 * @property string|null $beforeCommitId
 * @property string|null $afterCommitId
 * @property string|null $beforeBlobId
 * @property string|null $afterBlobId
 * @property Location|null $location
 * @property list<Comment>|null $comments
 */
class CommentsForComparedCommit extends Shape
{
    /**
     * @param array{
     *     repositoryName?: string|null,
     *     beforeCommitId?: string|null,
     *     afterCommitId?: string|null,
     *     beforeBlobId?: string|null,
     *     afterBlobId?: string|null,
     *     location?: Location|null,
     *     comments?: list<Comment>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

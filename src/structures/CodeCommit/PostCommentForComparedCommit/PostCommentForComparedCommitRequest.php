<?php

namespace Sunaoka\Aws\Structures\CodeCommit\PostCommentForComparedCommit;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $repositoryName
 * @property string|null $beforeCommitId
 * @property string $afterCommitId
 * @property Shapes\Location|null $location
 * @property string $content
 * @property string|null $clientRequestToken
 */
class PostCommentForComparedCommitRequest extends Request
{
    /**
     * @param array{
     *     repositoryName: string,
     *     beforeCommitId?: string|null,
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

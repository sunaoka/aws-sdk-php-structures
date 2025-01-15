<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetCommentsForComparedCommit;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $repositoryName
 * @property string|null $beforeCommitId
 * @property string $afterCommitId
 * @property string|null $nextToken
 * @property int|null $maxResults
 */
class GetCommentsForComparedCommitRequest extends Request
{
    /**
     * @param array{
     *     repositoryName: string,
     *     beforeCommitId?: string|null,
     *     afterCommitId: string,
     *     nextToken?: string|null,
     *     maxResults?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

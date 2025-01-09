<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetCommentsForComparedCommit;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $repositoryName
 * @property string $beforeCommitId
 * @property string $afterCommitId
 * @property string $nextToken
 * @property int $maxResults
 */
class GetCommentsForComparedCommitRequest extends Request
{
    /**
     * @param array{
     *     repositoryName: string,
     *     beforeCommitId?: string,
     *     afterCommitId: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

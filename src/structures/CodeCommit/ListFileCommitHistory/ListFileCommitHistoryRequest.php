<?php

namespace Sunaoka\Aws\Structures\CodeCommit\ListFileCommitHistory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $repositoryName
 * @property string $commitSpecifier
 * @property string $filePath
 * @property int $maxResults
 * @property string $nextToken
 */
class ListFileCommitHistoryRequest extends Request
{
    /**
     * @param array{
     *     repositoryName: string,
     *     commitSpecifier?: string,
     *     filePath: string,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

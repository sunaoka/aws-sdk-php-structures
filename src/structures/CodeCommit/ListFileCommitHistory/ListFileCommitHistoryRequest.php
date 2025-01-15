<?php

namespace Sunaoka\Aws\Structures\CodeCommit\ListFileCommitHistory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $repositoryName
 * @property string|null $commitSpecifier
 * @property string $filePath
 * @property int|null $maxResults
 * @property string|null $nextToken
 */
class ListFileCommitHistoryRequest extends Request
{
    /**
     * @param array{
     *     repositoryName: string,
     *     commitSpecifier?: string|null,
     *     filePath: string,
     *     maxResults?: int|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

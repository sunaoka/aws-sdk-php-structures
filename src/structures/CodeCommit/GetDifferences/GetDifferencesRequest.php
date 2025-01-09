<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetDifferences;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $repositoryName
 * @property string $beforeCommitSpecifier
 * @property string $afterCommitSpecifier
 * @property string $beforePath
 * @property string $afterPath
 * @property int $MaxResults
 * @property string $NextToken
 */
class GetDifferencesRequest extends Request
{
    /**
     * @param array{
     *     repositoryName: string,
     *     beforeCommitSpecifier?: string,
     *     afterCommitSpecifier: string,
     *     beforePath?: string,
     *     afterPath?: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

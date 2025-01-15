<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetDifferences;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $repositoryName
 * @property string|null $beforeCommitSpecifier
 * @property string $afterCommitSpecifier
 * @property string|null $beforePath
 * @property string|null $afterPath
 * @property int|null $MaxResults
 * @property string|null $NextToken
 */
class GetDifferencesRequest extends Request
{
    /**
     * @param array{
     *     repositoryName: string,
     *     beforeCommitSpecifier?: string|null,
     *     afterCommitSpecifier: string,
     *     beforePath?: string|null,
     *     afterPath?: string|null,
     *     MaxResults?: int|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

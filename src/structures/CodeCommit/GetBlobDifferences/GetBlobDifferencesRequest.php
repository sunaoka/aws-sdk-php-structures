<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetBlobDifferences;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $repositoryName
 * @property string $afterBlobId
 * @property string|null $beforeBlobId
 * @property int|null $contextLines
 * @property bool|null $ignoreWhitespace
 * @property int|null $MaxResults
 * @property string|null $NextToken
 */
class GetBlobDifferencesRequest extends Request
{
    /**
     * @param array{
     *     repositoryName: string,
     *     afterBlobId: string,
     *     beforeBlobId?: string|null,
     *     contextLines?: int|null,
     *     ignoreWhitespace?: bool|null,
     *     MaxResults?: int|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeFileCaches;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $FileCacheIds
 * @property int $MaxResults
 * @property string $NextToken
 */
class DescribeFileCachesRequest extends Request
{
    /**
     * @param array{
     *     FileCacheIds?: list<string>,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

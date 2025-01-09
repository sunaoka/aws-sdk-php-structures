<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeFileCaches;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $FileCacheIds
 * @property int<1, 2147483647> $MaxResults
 * @property string $NextToken
 */
class DescribeFileCachesRequest extends Request
{
    /**
     * @param array{
     *     FileCacheIds?: list<string>,
     *     MaxResults?: int<1, 2147483647>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

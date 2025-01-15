<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeFileCaches;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $FileCacheIds
 * @property int<1, 2147483647>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeFileCachesRequest extends Request
{
    /**
     * @param array{
     *     FileCacheIds?: list<string>|null,
     *     MaxResults?: int<1, 2147483647>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

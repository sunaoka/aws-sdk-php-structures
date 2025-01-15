<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeFileSystems;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $FileSystemIds
 * @property int<1, 2147483647>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeFileSystemsRequest extends Request
{
    /**
     * @param array{
     *     FileSystemIds?: list<string>|null,
     *     MaxResults?: int<1, 2147483647>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

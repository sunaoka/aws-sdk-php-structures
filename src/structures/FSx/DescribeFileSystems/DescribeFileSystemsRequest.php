<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeFileSystems;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $FileSystemIds
 * @property int $MaxResults
 * @property string $NextToken
 */
class DescribeFileSystemsRequest extends Request
{
    /**
     * @param array{
     *     FileSystemIds?: list<string>,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

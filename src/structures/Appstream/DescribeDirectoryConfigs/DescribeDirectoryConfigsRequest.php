<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeDirectoryConfigs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $DirectoryNames
 * @property int $MaxResults
 * @property string $NextToken
 */
class DescribeDirectoryConfigsRequest extends Request
{
    /**
     * @param array{
     *     DirectoryNames?: list<string>,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

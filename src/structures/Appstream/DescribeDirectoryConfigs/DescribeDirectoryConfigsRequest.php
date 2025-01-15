<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeDirectoryConfigs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $DirectoryNames
 * @property int|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeDirectoryConfigsRequest extends Request
{
    /**
     * @param array{
     *     DirectoryNames?: list<string>|null,
     *     MaxResults?: int|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

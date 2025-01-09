<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeDirectories;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $DirectoryIds
 * @property string $NextToken
 * @property int<0, max> $Limit
 */
class DescribeDirectoriesRequest extends Request
{
    /**
     * @param array{
     *     DirectoryIds?: list<string>,
     *     NextToken?: string,
     *     Limit?: int<0, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

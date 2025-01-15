<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeDirectories;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $DirectoryIds
 * @property string|null $NextToken
 * @property int<0, max>|null $Limit
 */
class DescribeDirectoriesRequest extends Request
{
    /**
     * @param array{
     *     DirectoryIds?: list<string>|null,
     *     NextToken?: string|null,
     *     Limit?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

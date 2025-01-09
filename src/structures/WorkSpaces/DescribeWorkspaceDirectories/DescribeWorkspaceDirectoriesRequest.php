<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspaceDirectories;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $DirectoryIds
 * @property list<string> $WorkspaceDirectoryNames
 * @property int $Limit
 * @property string $NextToken
 * @property list<Shapes\DescribeWorkspaceDirectoriesFilter> $Filters
 */
class DescribeWorkspaceDirectoriesRequest extends Request
{
    /**
     * @param array{
     *     DirectoryIds?: list<string>,
     *     WorkspaceDirectoryNames?: list<string>,
     *     Limit?: int,
     *     NextToken?: string,
     *     Filters?: list<Shapes\DescribeWorkspaceDirectoriesFilter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

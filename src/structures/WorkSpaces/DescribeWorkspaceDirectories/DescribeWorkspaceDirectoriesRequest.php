<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspaceDirectories;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $DirectoryIds
 * @property list<string>|null $WorkspaceDirectoryNames
 * @property int<1, 25>|null $Limit
 * @property string|null $NextToken
 * @property list<Shapes\DescribeWorkspaceDirectoriesFilter>|null $Filters
 */
class DescribeWorkspaceDirectoriesRequest extends Request
{
    /**
     * @param array{
     *     DirectoryIds?: list<string>|null,
     *     WorkspaceDirectoryNames?: list<string>|null,
     *     Limit?: int<1, 25>|null,
     *     NextToken?: string|null,
     *     Filters?: list<Shapes\DescribeWorkspaceDirectoriesFilter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

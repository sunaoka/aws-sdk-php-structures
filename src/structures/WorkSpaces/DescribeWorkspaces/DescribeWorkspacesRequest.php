<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspaces;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $WorkspaceIds
 * @property string|null $DirectoryId
 * @property string|null $UserName
 * @property string|null $BundleId
 * @property int<1, 25>|null $Limit
 * @property string|null $NextToken
 * @property string|null $WorkspaceName
 */
class DescribeWorkspacesRequest extends Request
{
    /**
     * @param array{
     *     WorkspaceIds?: list<string>|null,
     *     DirectoryId?: string|null,
     *     UserName?: string|null,
     *     BundleId?: string|null,
     *     Limit?: int<1, 25>|null,
     *     NextToken?: string|null,
     *     WorkspaceName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

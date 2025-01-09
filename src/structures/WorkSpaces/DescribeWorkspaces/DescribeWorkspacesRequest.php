<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspaces;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $WorkspaceIds
 * @property string $DirectoryId
 * @property string $UserName
 * @property string $BundleId
 * @property int<1, 25> $Limit
 * @property string $NextToken
 * @property string $WorkspaceName
 */
class DescribeWorkspacesRequest extends Request
{
    /**
     * @param array{
     *     WorkspaceIds?: list<string>,
     *     DirectoryId?: string,
     *     UserName?: string,
     *     BundleId?: string,
     *     Limit?: int<1, 25>,
     *     NextToken?: string,
     *     WorkspaceName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

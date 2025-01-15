<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspacesConnectionStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $WorkspaceIds
 * @property string|null $NextToken
 */
class DescribeWorkspacesConnectionStatusRequest extends Request
{
    /**
     * @param array{
     *     WorkspaceIds?: list<string>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

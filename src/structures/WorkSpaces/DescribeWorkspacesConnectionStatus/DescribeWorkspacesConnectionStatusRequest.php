<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspacesConnectionStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $WorkspaceIds
 * @property string $NextToken
 */
class DescribeWorkspacesConnectionStatusRequest extends Request
{
    /**
     * @param array{
     *     WorkspaceIds?: list<string>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

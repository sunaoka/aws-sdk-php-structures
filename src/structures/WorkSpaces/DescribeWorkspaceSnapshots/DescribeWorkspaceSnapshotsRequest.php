<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspaceSnapshots;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkspaceId
 */
class DescribeWorkspaceSnapshotsRequest extends Request
{
    /**
     * @param array{WorkspaceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

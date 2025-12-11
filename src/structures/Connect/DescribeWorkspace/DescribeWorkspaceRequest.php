<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeWorkspace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $WorkspaceId
 */
class DescribeWorkspaceRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     WorkspaceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

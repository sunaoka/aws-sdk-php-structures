<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\DescribeWorkspaceAuthentication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 */
class DescribeWorkspaceAuthenticationRequest extends Request
{
    /**
     * @param array{workspaceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

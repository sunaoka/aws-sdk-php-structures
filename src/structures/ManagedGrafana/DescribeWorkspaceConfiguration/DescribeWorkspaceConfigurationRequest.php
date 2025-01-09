<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\DescribeWorkspaceConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 */
class DescribeWorkspaceConfigurationRequest extends Request
{
    /**
     * @param array{workspaceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

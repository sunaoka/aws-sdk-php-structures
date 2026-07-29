<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeWorkspace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceName
 */
class DescribeWorkspaceRequest extends Request
{
    /**
     * @param array{workspaceName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

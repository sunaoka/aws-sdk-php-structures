<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\GetWorkspace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 */
class GetWorkspaceRequest extends Request
{
    /**
     * @param array{workspaceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

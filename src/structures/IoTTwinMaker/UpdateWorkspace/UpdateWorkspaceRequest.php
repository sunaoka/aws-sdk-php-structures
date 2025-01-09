<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\UpdateWorkspace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 * @property string $description
 * @property string $role
 * @property string $s3Location
 */
class UpdateWorkspaceRequest extends Request
{
    /**
     * @param array{
     *     workspaceId: string,
     *     description?: string,
     *     role?: string,
     *     s3Location?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

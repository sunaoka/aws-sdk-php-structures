<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\UpdateWorkspace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 * @property string|null $description
 * @property string|null $role
 */
class UpdateWorkspaceRequest extends Request
{
    /**
     * @param array{
     *     workspaceId: string,
     *     description?: string|null,
     *     role?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\UpdateWorkspace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 * @property string|null $description
 * @property string|null $role
 * @property string|null $s3Location
 */
class UpdateWorkspaceRequest extends Request
{
    /**
     * @param array{
     *     workspaceId: string,
     *     description?: string|null,
     *     role?: string|null,
     *     s3Location?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

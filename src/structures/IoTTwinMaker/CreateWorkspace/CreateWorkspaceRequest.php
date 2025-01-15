<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\CreateWorkspace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 * @property string|null $description
 * @property string|null $s3Location
 * @property string|null $role
 * @property array<string, string>|null $tags
 */
class CreateWorkspaceRequest extends Request
{
    /**
     * @param array{
     *     workspaceId: string,
     *     description?: string|null,
     *     s3Location?: string|null,
     *     role?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

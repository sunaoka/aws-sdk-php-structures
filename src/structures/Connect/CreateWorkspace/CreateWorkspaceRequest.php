<?php

namespace Sunaoka\Aws\Structures\Connect\CreateWorkspace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $Name
 * @property string|null $Description
 * @property Shapes\WorkspaceTheme|null $Theme
 * @property string|null $Title
 * @property array<string, string>|null $Tags
 */
class CreateWorkspaceRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     Name: string,
     *     Description?: string|null,
     *     Theme?: Shapes\WorkspaceTheme|null,
     *     Title?: string|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

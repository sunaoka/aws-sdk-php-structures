<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\CreateWorkspaceServiceAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property 'ADMIN'|'EDITOR'|'VIEWER' $grafanaRole
 * @property string $workspaceId
 */
class CreateWorkspaceServiceAccountRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     grafanaRole: 'ADMIN'|'EDITOR'|'VIEWER',
     *     workspaceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

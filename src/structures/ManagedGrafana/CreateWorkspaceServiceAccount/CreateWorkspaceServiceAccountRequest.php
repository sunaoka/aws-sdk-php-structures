<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\CreateWorkspaceServiceAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ADMIN'|'EDITOR'|'VIEWER' $grafanaRole
 * @property string $name
 * @property string $workspaceId
 */
class CreateWorkspaceServiceAccountRequest extends Request
{
    /**
     * @param array{
     *     grafanaRole: 'ADMIN'|'EDITOR'|'VIEWER',
     *     name: string,
     *     workspaceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

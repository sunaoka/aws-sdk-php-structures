<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\CreateWorkspaceServiceAccount;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $name
 * @property 'ADMIN'|'EDITOR'|'VIEWER' $grafanaRole
 * @property string $workspaceId
 */
class CreateWorkspaceServiceAccountResponse extends Response
{
}

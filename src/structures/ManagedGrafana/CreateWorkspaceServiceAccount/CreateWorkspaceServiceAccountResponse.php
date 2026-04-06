<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\CreateWorkspaceServiceAccount;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'ADMIN'|'EDITOR'|'VIEWER' $grafanaRole
 * @property string $id
 * @property string $name
 * @property string $workspaceId
 */
class CreateWorkspaceServiceAccountResponse extends Response
{
}

<?php

namespace Sunaoka\Aws\Structures\WorkspacesInstances\GetWorkspaceInstance;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\WorkspaceInstanceError>|null $WorkspaceInstanceErrors
 * @property list<Shapes\EC2InstanceError>|null $EC2InstanceErrors
 * @property 'ALLOCATING'|'ALLOCATED'|'DEALLOCATING'|'DEALLOCATED'|'ERROR_ALLOCATING'|'ERROR_DEALLOCATING'|null $ProvisionState
 * @property string|null $WorkspaceInstanceId
 * @property Shapes\EC2ManagedInstance|null $EC2ManagedInstance
 */
class GetWorkspaceInstanceResponse extends Response
{
}

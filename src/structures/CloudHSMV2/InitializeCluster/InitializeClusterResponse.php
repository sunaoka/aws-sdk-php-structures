<?php

namespace Sunaoka\Aws\Structures\CloudHSMV2\InitializeCluster;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'CREATE_IN_PROGRESS'|'UNINITIALIZED'|'INITIALIZE_IN_PROGRESS'|'INITIALIZED'|'ACTIVE'|'UPDATE_IN_PROGRESS'|'MODIFY_IN_PROGRESS'|'ROLLBACK_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'DELETED'|'DEGRADED'|null $State
 * @property string|null $StateMessage
 */
class InitializeClusterResponse extends Response
{
}

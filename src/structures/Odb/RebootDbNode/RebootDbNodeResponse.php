<?php

namespace Sunaoka\Aws\Structures\Odb\RebootDbNode;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $dbNodeId
 * @property 'AVAILABLE'|'FAILED'|'PROVISIONING'|'TERMINATED'|'TERMINATING'|'UPDATING'|'STOPPING'|'STOPPED'|'STARTING'|null $status
 * @property string|null $statusReason
 */
class RebootDbNodeResponse extends Response
{
}

<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\SwitchoverReplication;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $DomainArn
 * @property 'PENDING_SETUP'|'ACTIVE'|'SWITCHING_OVER'|'FAILING_OVER'|'PENDING_REMOVAL'|'DETACHED'|'EJECTED'|'FAILED'|null $Status
 */
class SwitchoverReplicationResponse extends Response
{
}

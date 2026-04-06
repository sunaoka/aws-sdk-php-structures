<?php

namespace Sunaoka\Aws\Structures\Outposts\StartOutpostDecommission;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'SKIPPED'|'BLOCKED'|'REQUESTED'|null $Status
 * @property list<'EC2_INSTANCE'|'OUTPOST_RAM_SHARE'|'LGW_ROUTING_DOMAIN'|'LGW_ROUTE_TABLE'|'LGW_VIRTUAL_INTERFACE_GROUP'|'OUTPOST_ORDER_CANCELLABLE'|'OUTPOST_ORDER_INTERVENTION_REQUIRED'>|null $BlockingResourceTypes
 */
class StartOutpostDecommissionResponse extends Response
{
}

<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\StartFlowFlush;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $FirewallArn
 * @property string|null $FlowOperationId
 * @property 'COMPLETED'|'IN_PROGRESS'|'FAILED'|'COMPLETED_WITH_ERRORS'|null $FlowOperationStatus
 */
class StartFlowFlushResponse extends Response
{
}

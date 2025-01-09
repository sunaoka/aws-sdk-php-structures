<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\GetDomainMaintenanceStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'PENDING'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'TIMED_OUT' $Status
 * @property string $StatusMessage
 * @property string $NodeId
 * @property 'REBOOT_NODE'|'RESTART_SEARCH_PROCESS'|'RESTART_DASHBOARD' $Action
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 */
class GetDomainMaintenanceStatusResponse extends Response
{
}

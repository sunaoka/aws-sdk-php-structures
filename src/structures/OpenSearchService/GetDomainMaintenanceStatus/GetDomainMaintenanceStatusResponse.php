<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\GetDomainMaintenanceStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'PENDING'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'TIMED_OUT'|null $Status
 * @property string|null $StatusMessage
 * @property string|null $NodeId
 * @property 'REBOOT_NODE'|'RESTART_SEARCH_PROCESS'|'RESTART_DASHBOARD'|null $Action
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 */
class GetDomainMaintenanceStatusResponse extends Response
{
}

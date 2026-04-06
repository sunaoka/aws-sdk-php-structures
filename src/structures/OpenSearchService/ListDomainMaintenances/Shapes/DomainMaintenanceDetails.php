<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\ListDomainMaintenances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MaintenanceId
 * @property string|null $DomainName
 * @property 'REBOOT_NODE'|'RESTART_SEARCH_PROCESS'|'RESTART_DASHBOARD'|null $Action
 * @property string|null $NodeId
 * @property 'PENDING'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'TIMED_OUT'|null $Status
 * @property string|null $StatusMessage
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 */
class DomainMaintenanceDetails extends Shape
{
    /**
     * @param array{
     *     MaintenanceId?: string|null,
     *     DomainName?: string|null,
     *     Action?: 'REBOOT_NODE'|'RESTART_SEARCH_PROCESS'|'RESTART_DASHBOARD'|null,
     *     NodeId?: string|null,
     *     Status?: 'PENDING'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'TIMED_OUT'|null,
     *     StatusMessage?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

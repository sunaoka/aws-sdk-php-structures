<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\ListDomainMaintenances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MaintenanceId
 * @property string $DomainName
 * @property 'REBOOT_NODE'|'RESTART_SEARCH_PROCESS'|'RESTART_DASHBOARD' $Action
 * @property string $NodeId
 * @property 'PENDING'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'TIMED_OUT' $Status
 * @property string $StatusMessage
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 */
class DomainMaintenanceDetails extends Shape
{
    /**
     * @param array{
     *     MaintenanceId?: string,
     *     DomainName?: string,
     *     Action?: 'REBOOT_NODE'|'RESTART_SEARCH_PROCESS'|'RESTART_DASHBOARD',
     *     NodeId?: string,
     *     Status?: 'PENDING'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'TIMED_OUT',
     *     StatusMessage?: string,
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     UpdatedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

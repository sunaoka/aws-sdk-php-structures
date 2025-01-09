<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\ListDomainMaintenances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property 'REBOOT_NODE'|'RESTART_SEARCH_PROCESS'|'RESTART_DASHBOARD' $Action
 * @property 'PENDING'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'TIMED_OUT' $Status
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListDomainMaintenancesRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     Action?: 'REBOOT_NODE'|'RESTART_SEARCH_PROCESS'|'RESTART_DASHBOARD',
     *     Status?: 'PENDING'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'TIMED_OUT',
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

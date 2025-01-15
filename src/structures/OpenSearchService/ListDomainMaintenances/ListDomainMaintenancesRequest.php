<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\ListDomainMaintenances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property 'REBOOT_NODE'|'RESTART_SEARCH_PROCESS'|'RESTART_DASHBOARD'|null $Action
 * @property 'PENDING'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'TIMED_OUT'|null $Status
 * @property int<min, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListDomainMaintenancesRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     Action?: 'REBOOT_NODE'|'RESTART_SEARCH_PROCESS'|'RESTART_DASHBOARD'|null,
     *     Status?: 'PENDING'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'TIMED_OUT'|null,
     *     MaxResults?: int<min, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

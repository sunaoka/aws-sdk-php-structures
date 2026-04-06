<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\StartDomainMaintenance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property 'REBOOT_NODE'|'RESTART_SEARCH_PROCESS'|'RESTART_DASHBOARD' $Action
 * @property string|null $NodeId
 */
class StartDomainMaintenanceRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     Action: 'REBOOT_NODE'|'RESTART_SEARCH_PROCESS'|'RESTART_DASHBOARD',
     *     NodeId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DeleteFirewall\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PROVISIONING'|'DELETING'|'READY' $Status
 * @property 'PENDING'|'IN_SYNC'|'CAPACITY_CONSTRAINED' $ConfigurationSyncStateSummary
 * @property array<string, SyncState> $SyncStates
 * @property CapacityUsageSummary $CapacityUsageSummary
 */
class FirewallStatus extends Shape
{
    /**
     * @param array{
     *     Status: 'PROVISIONING'|'DELETING'|'READY',
     *     ConfigurationSyncStateSummary: 'PENDING'|'IN_SYNC'|'CAPACITY_CONSTRAINED',
     *     SyncStates?: array<string, SyncState>,
     *     CapacityUsageSummary?: CapacityUsageSummary
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

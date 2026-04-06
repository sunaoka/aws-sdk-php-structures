<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DeleteFirewall\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PROVISIONING'|'DELETING'|'READY' $Status
 * @property 'PENDING'|'IN_SYNC'|'CAPACITY_CONSTRAINED' $ConfigurationSyncStateSummary
 * @property array<string, SyncState>|null $SyncStates
 * @property CapacityUsageSummary|null $CapacityUsageSummary
 * @property TransitGatewayAttachmentSyncState|null $TransitGatewayAttachmentSyncState
 */
class FirewallStatus extends Shape
{
    /**
     * @param array{
     *     Status: 'PROVISIONING'|'DELETING'|'READY',
     *     ConfigurationSyncStateSummary: 'PENDING'|'IN_SYNC'|'CAPACITY_CONSTRAINED',
     *     SyncStates?: array<string, SyncState>|null,
     *     CapacityUsageSummary?: CapacityUsageSummary|null,
     *     TransitGatewayAttachmentSyncState?: TransitGatewayAttachmentSyncState|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeStorageVirtualMachinePeers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceARN
 * @property string|null $StorageVirtualMachinePeerId
 * @property string|null $StorageVirtualMachineId
 * @property string|null $FileSystemId
 * @property 'CREATING'|'CREATED'|'DELETING'|'FAILED'|null $Lifecycle
 * @property LifecycleTransitionReason|null $LifecycleTransitionReason
 * @property list<Tag>|null $Tags
 * @property string|null $PeerSvmName
 * @property string|null $PeerSvmAlias
 * @property string|null $PeerClusterName
 * @property list<'SNAPMIRROR'|'FILE_COPY'|'LUN_COPY'|'FLEXCACHE'>|null $Applications
 * @property 'PEERED'|'REJECTED'|'SUSPENDED'|'INITIATED'|'PENDING'|'INITIALIZING'|null $State
 * @property string|null $UUID
 */
class StorageVirtualMachinePeer extends Shape
{
    /**
     * @param array{
     *     ResourceARN?: string|null,
     *     StorageVirtualMachinePeerId?: string|null,
     *     StorageVirtualMachineId?: string|null,
     *     FileSystemId?: string|null,
     *     Lifecycle?: 'CREATING'|'CREATED'|'DELETING'|'FAILED'|null,
     *     LifecycleTransitionReason?: LifecycleTransitionReason|null,
     *     Tags?: list<Tag>|null,
     *     PeerSvmName?: string|null,
     *     PeerSvmAlias?: string|null,
     *     PeerClusterName?: string|null,
     *     Applications?: list<'SNAPMIRROR'|'FILE_COPY'|'LUN_COPY'|'FLEXCACHE'>|null,
     *     State?: 'PEERED'|'REJECTED'|'SUSPENDED'|'INITIATED'|'PENDING'|'INITIALIZING'|null,
     *     UUID?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

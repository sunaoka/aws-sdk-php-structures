<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateStorageVirtualMachine\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SvmActiveDirectoryConfiguration $ActiveDirectoryConfiguration
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property SvmEndpoints $Endpoints
 * @property string $FileSystemId
 * @property 'CREATED'|'CREATING'|'DELETING'|'FAILED'|'MISCONFIGURED'|'PENDING' $Lifecycle
 * @property string $Name
 * @property string $ResourceARN
 * @property string $StorageVirtualMachineId
 * @property 'DEFAULT'|'DP_DESTINATION'|'SYNC_DESTINATION'|'SYNC_SOURCE' $Subtype
 * @property string $UUID
 * @property list<Tag> $Tags
 * @property LifecycleTransitionReason $LifecycleTransitionReason
 * @property 'UNIX'|'NTFS'|'MIXED' $RootVolumeSecurityStyle
 */
class StorageVirtualMachine extends Shape
{
    /**
     * @param array{
     *     ActiveDirectoryConfiguration?: SvmActiveDirectoryConfiguration,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     Endpoints?: SvmEndpoints,
     *     FileSystemId?: string,
     *     Lifecycle?: 'CREATED'|'CREATING'|'DELETING'|'FAILED'|'MISCONFIGURED'|'PENDING',
     *     Name?: string,
     *     ResourceARN?: string,
     *     StorageVirtualMachineId?: string,
     *     Subtype?: 'DEFAULT'|'DP_DESTINATION'|'SYNC_DESTINATION'|'SYNC_SOURCE',
     *     UUID?: string,
     *     Tags?: list<Tag>,
     *     LifecycleTransitionReason?: LifecycleTransitionReason,
     *     RootVolumeSecurityStyle?: 'UNIX'|'NTFS'|'MIXED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

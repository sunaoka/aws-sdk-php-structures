<?php

namespace Sunaoka\Aws\Structures\FSx\CreateStorageVirtualMachine\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SvmActiveDirectoryConfiguration|null $ActiveDirectoryConfiguration
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property SvmEndpoints|null $Endpoints
 * @property string|null $FileSystemId
 * @property 'CREATED'|'CREATING'|'DELETING'|'FAILED'|'MISCONFIGURED'|'PENDING'|null $Lifecycle
 * @property string|null $Name
 * @property string|null $ResourceARN
 * @property string|null $StorageVirtualMachineId
 * @property 'DEFAULT'|'DP_DESTINATION'|'SYNC_DESTINATION'|'SYNC_SOURCE'|null $Subtype
 * @property string|null $UUID
 * @property list<Tag>|null $Tags
 * @property LifecycleTransitionReason|null $LifecycleTransitionReason
 * @property 'UNIX'|'NTFS'|'MIXED'|null $RootVolumeSecurityStyle
 */
class StorageVirtualMachine extends Shape
{
    /**
     * @param array{
     *     ActiveDirectoryConfiguration?: SvmActiveDirectoryConfiguration|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     Endpoints?: SvmEndpoints|null,
     *     FileSystemId?: string|null,
     *     Lifecycle?: 'CREATED'|'CREATING'|'DELETING'|'FAILED'|'MISCONFIGURED'|'PENDING'|null,
     *     Name?: string|null,
     *     ResourceARN?: string|null,
     *     StorageVirtualMachineId?: string|null,
     *     Subtype?: 'DEFAULT'|'DP_DESTINATION'|'SYNC_DESTINATION'|'SYNC_SOURCE'|null,
     *     UUID?: string|null,
     *     Tags?: list<Tag>|null,
     *     LifecycleTransitionReason?: LifecycleTransitionReason|null,
     *     RootVolumeSecurityStyle?: 'UNIX'|'NTFS'|'MIXED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

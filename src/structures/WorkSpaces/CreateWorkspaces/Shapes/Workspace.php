<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\CreateWorkspaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $WorkspaceId
 * @property string|null $DirectoryId
 * @property string|null $UserName
 * @property string|null $IpAddress
 * @property 'PENDING'|'AVAILABLE'|'IMPAIRED'|'UNHEALTHY'|'REBOOTING'|'STARTING'|'REBUILDING'|'RESTORING'|'MAINTENANCE'|'ADMIN_MAINTENANCE'|'TERMINATING'|'TERMINATED'|'SUSPENDED'|'UPDATING'|'STOPPING'|'STOPPED'|'ERROR'|null $State
 * @property string|null $BundleId
 * @property string|null $SubnetId
 * @property string|null $ErrorMessage
 * @property string|null $ErrorCode
 * @property string|null $ComputerName
 * @property string|null $VolumeEncryptionKey
 * @property bool|null $UserVolumeEncryptionEnabled
 * @property bool|null $RootVolumeEncryptionEnabled
 * @property string|null $WorkspaceName
 * @property WorkspaceProperties|null $WorkspaceProperties
 * @property list<ModificationState>|null $ModificationStates
 * @property list<RelatedWorkspaceProperties>|null $RelatedWorkspaces
 * @property DataReplicationSettings|null $DataReplicationSettings
 * @property list<StandbyWorkspacesProperties>|null $StandbyWorkspacesProperties
 */
class Workspace extends Shape
{
    /**
     * @param array{
     *     WorkspaceId?: string|null,
     *     DirectoryId?: string|null,
     *     UserName?: string|null,
     *     IpAddress?: string|null,
     *     State?: 'PENDING'|'AVAILABLE'|'IMPAIRED'|'UNHEALTHY'|'REBOOTING'|'STARTING'|'REBUILDING'|'RESTORING'|'MAINTENANCE'|'ADMIN_MAINTENANCE'|'TERMINATING'|'TERMINATED'|'SUSPENDED'|'UPDATING'|'STOPPING'|'STOPPED'|'ERROR'|null,
     *     BundleId?: string|null,
     *     SubnetId?: string|null,
     *     ErrorMessage?: string|null,
     *     ErrorCode?: string|null,
     *     ComputerName?: string|null,
     *     VolumeEncryptionKey?: string|null,
     *     UserVolumeEncryptionEnabled?: bool|null,
     *     RootVolumeEncryptionEnabled?: bool|null,
     *     WorkspaceName?: string|null,
     *     WorkspaceProperties?: WorkspaceProperties|null,
     *     ModificationStates?: list<ModificationState>|null,
     *     RelatedWorkspaces?: list<RelatedWorkspaceProperties>|null,
     *     DataReplicationSettings?: DataReplicationSettings|null,
     *     StandbyWorkspacesProperties?: list<StandbyWorkspacesProperties>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

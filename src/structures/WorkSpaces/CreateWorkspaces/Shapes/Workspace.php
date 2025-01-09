<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\CreateWorkspaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $WorkspaceId
 * @property string $DirectoryId
 * @property string $UserName
 * @property string $IpAddress
 * @property 'PENDING'|'AVAILABLE'|'IMPAIRED'|'UNHEALTHY'|'REBOOTING'|'STARTING'|'REBUILDING'|'RESTORING'|'MAINTENANCE'|'ADMIN_MAINTENANCE'|'TERMINATING'|'TERMINATED'|'SUSPENDED'|'UPDATING'|'STOPPING'|'STOPPED'|'ERROR' $State
 * @property string $BundleId
 * @property string $SubnetId
 * @property string $ErrorMessage
 * @property string $ErrorCode
 * @property string $ComputerName
 * @property string $VolumeEncryptionKey
 * @property bool $UserVolumeEncryptionEnabled
 * @property bool $RootVolumeEncryptionEnabled
 * @property string $WorkspaceName
 * @property WorkspaceProperties $WorkspaceProperties
 * @property list<ModificationState> $ModificationStates
 * @property list<RelatedWorkspaceProperties> $RelatedWorkspaces
 * @property DataReplicationSettings $DataReplicationSettings
 * @property list<StandbyWorkspacesProperties> $StandbyWorkspacesProperties
 */
class Workspace extends Shape
{
    /**
     * @param array{
     *     WorkspaceId?: string,
     *     DirectoryId?: string,
     *     UserName?: string,
     *     IpAddress?: string,
     *     State?: 'PENDING'|'AVAILABLE'|'IMPAIRED'|'UNHEALTHY'|'REBOOTING'|'STARTING'|'REBUILDING'|'RESTORING'|'MAINTENANCE'|'ADMIN_MAINTENANCE'|'TERMINATING'|'TERMINATED'|'SUSPENDED'|'UPDATING'|'STOPPING'|'STOPPED'|'ERROR',
     *     BundleId?: string,
     *     SubnetId?: string,
     *     ErrorMessage?: string,
     *     ErrorCode?: string,
     *     ComputerName?: string,
     *     VolumeEncryptionKey?: string,
     *     UserVolumeEncryptionEnabled?: bool,
     *     RootVolumeEncryptionEnabled?: bool,
     *     WorkspaceName?: string,
     *     WorkspaceProperties?: WorkspaceProperties,
     *     ModificationStates?: list<ModificationState>,
     *     RelatedWorkspaces?: list<RelatedWorkspaceProperties>,
     *     DataReplicationSettings?: DataReplicationSettings,
     *     StandbyWorkspacesProperties?: list<StandbyWorkspacesProperties>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

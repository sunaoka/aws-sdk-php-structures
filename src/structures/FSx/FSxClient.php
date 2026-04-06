<?php

namespace Sunaoka\Aws\Structures\FSx;

class FSxClient extends \Aws\FSx\FSxClient
{
    use AssociateFileSystemAliases\AssociateFileSystemAliasesTrait;
    use CancelDataRepositoryTask\CancelDataRepositoryTaskTrait;
    use CopyBackup\CopyBackupTrait;
    use CopySnapshotAndUpdateVolume\CopySnapshotAndUpdateVolumeTrait;
    use CreateAndAttachS3AccessPoint\CreateAndAttachS3AccessPointTrait;
    use CreateBackup\CreateBackupTrait;
    use CreateDataRepositoryAssociation\CreateDataRepositoryAssociationTrait;
    use CreateDataRepositoryTask\CreateDataRepositoryTaskTrait;
    use CreateFileCache\CreateFileCacheTrait;
    use CreateFileSystem\CreateFileSystemTrait;
    use CreateFileSystemFromBackup\CreateFileSystemFromBackupTrait;
    use CreateSnapshot\CreateSnapshotTrait;
    use CreateStorageVirtualMachine\CreateStorageVirtualMachineTrait;
    use CreateVolume\CreateVolumeTrait;
    use CreateVolumeFromBackup\CreateVolumeFromBackupTrait;
    use DeleteBackup\DeleteBackupTrait;
    use DeleteDataRepositoryAssociation\DeleteDataRepositoryAssociationTrait;
    use DeleteFileCache\DeleteFileCacheTrait;
    use DeleteFileSystem\DeleteFileSystemTrait;
    use DeleteSnapshot\DeleteSnapshotTrait;
    use DeleteStorageVirtualMachine\DeleteStorageVirtualMachineTrait;
    use DeleteVolume\DeleteVolumeTrait;
    use DescribeBackups\DescribeBackupsTrait;
    use DescribeDataRepositoryAssociations\DescribeDataRepositoryAssociationsTrait;
    use DescribeDataRepositoryTasks\DescribeDataRepositoryTasksTrait;
    use DescribeFileCaches\DescribeFileCachesTrait;
    use DescribeFileSystemAliases\DescribeFileSystemAliasesTrait;
    use DescribeFileSystems\DescribeFileSystemsTrait;
    use DescribeS3AccessPointAttachments\DescribeS3AccessPointAttachmentsTrait;
    use DescribeSharedVpcConfiguration\DescribeSharedVpcConfigurationTrait;
    use DescribeSnapshots\DescribeSnapshotsTrait;
    use DescribeStorageVirtualMachines\DescribeStorageVirtualMachinesTrait;
    use DescribeVolumes\DescribeVolumesTrait;
    use DetachAndDeleteS3AccessPoint\DetachAndDeleteS3AccessPointTrait;
    use DisassociateFileSystemAliases\DisassociateFileSystemAliasesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ReleaseFileSystemNfsV3Locks\ReleaseFileSystemNfsV3LocksTrait;
    use RestoreVolumeFromSnapshot\RestoreVolumeFromSnapshotTrait;
    use StartMisconfiguredStateRecovery\StartMisconfiguredStateRecoveryTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateDataRepositoryAssociation\UpdateDataRepositoryAssociationTrait;
    use UpdateFileCache\UpdateFileCacheTrait;
    use UpdateFileSystem\UpdateFileSystemTrait;
    use UpdateSharedVpcConfiguration\UpdateSharedVpcConfigurationTrait;
    use UpdateSnapshot\UpdateSnapshotTrait;
    use UpdateStorageVirtualMachine\UpdateStorageVirtualMachineTrait;
    use UpdateVolume\UpdateVolumeTrait;
}

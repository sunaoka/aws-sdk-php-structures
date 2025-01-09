<?php

namespace Sunaoka\Aws\Structures\FSx\CreateFileSystemFromBackup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BackupId
 * @property string $ClientRequestToken
 * @property list<string> $SubnetIds
 * @property list<string> $SecurityGroupIds
 * @property list<Shapes\Tag> $Tags
 * @property Shapes\CreateFileSystemWindowsConfiguration $WindowsConfiguration
 * @property Shapes\CreateFileSystemLustreConfiguration $LustreConfiguration
 * @property 'SSD'|'HDD'|'INTELLIGENT_TIERING' $StorageType
 * @property string $KmsKeyId
 * @property string $FileSystemTypeVersion
 * @property Shapes\CreateFileSystemOpenZFSConfiguration $OpenZFSConfiguration
 * @property int<0, 2147483647> $StorageCapacity
 */
class CreateFileSystemFromBackupRequest extends Request
{
    /**
     * @param array{
     *     BackupId: string,
     *     ClientRequestToken?: string,
     *     SubnetIds: list<string>,
     *     SecurityGroupIds?: list<string>,
     *     Tags?: list<Shapes\Tag>,
     *     WindowsConfiguration?: Shapes\CreateFileSystemWindowsConfiguration,
     *     LustreConfiguration?: Shapes\CreateFileSystemLustreConfiguration,
     *     StorageType?: 'SSD'|'HDD'|'INTELLIGENT_TIERING',
     *     KmsKeyId?: string,
     *     FileSystemTypeVersion?: string,
     *     OpenZFSConfiguration?: Shapes\CreateFileSystemOpenZFSConfiguration,
     *     StorageCapacity?: int<0, 2147483647>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

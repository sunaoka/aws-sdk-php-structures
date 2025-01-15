<?php

namespace Sunaoka\Aws\Structures\FSx\CreateFileSystemFromBackup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BackupId
 * @property string|null $ClientRequestToken
 * @property list<string> $SubnetIds
 * @property list<string>|null $SecurityGroupIds
 * @property list<Shapes\Tag>|null $Tags
 * @property Shapes\CreateFileSystemWindowsConfiguration|null $WindowsConfiguration
 * @property Shapes\CreateFileSystemLustreConfiguration|null $LustreConfiguration
 * @property 'SSD'|'HDD'|'INTELLIGENT_TIERING'|null $StorageType
 * @property string|null $KmsKeyId
 * @property string|null $FileSystemTypeVersion
 * @property Shapes\CreateFileSystemOpenZFSConfiguration|null $OpenZFSConfiguration
 * @property int<0, 2147483647>|null $StorageCapacity
 */
class CreateFileSystemFromBackupRequest extends Request
{
    /**
     * @param array{
     *     BackupId: string,
     *     ClientRequestToken?: string|null,
     *     SubnetIds: list<string>,
     *     SecurityGroupIds?: list<string>|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     WindowsConfiguration?: Shapes\CreateFileSystemWindowsConfiguration|null,
     *     LustreConfiguration?: Shapes\CreateFileSystemLustreConfiguration|null,
     *     StorageType?: 'SSD'|'HDD'|'INTELLIGENT_TIERING'|null,
     *     KmsKeyId?: string|null,
     *     FileSystemTypeVersion?: string|null,
     *     OpenZFSConfiguration?: Shapes\CreateFileSystemOpenZFSConfiguration|null,
     *     StorageCapacity?: int<0, 2147483647>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

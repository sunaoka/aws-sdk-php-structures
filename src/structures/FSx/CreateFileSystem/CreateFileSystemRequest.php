<?php

namespace Sunaoka\Aws\Structures\FSx\CreateFileSystem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientRequestToken
 * @property 'WINDOWS'|'LUSTRE'|'ONTAP'|'OPENZFS' $FileSystemType
 * @property int<0, 2147483647> $StorageCapacity
 * @property 'SSD'|'HDD'|'INTELLIGENT_TIERING' $StorageType
 * @property list<string> $SubnetIds
 * @property list<string> $SecurityGroupIds
 * @property list<Shapes\Tag> $Tags
 * @property string $KmsKeyId
 * @property Shapes\CreateFileSystemWindowsConfiguration $WindowsConfiguration
 * @property Shapes\CreateFileSystemLustreConfiguration $LustreConfiguration
 * @property Shapes\CreateFileSystemOntapConfiguration $OntapConfiguration
 * @property string $FileSystemTypeVersion
 * @property Shapes\CreateFileSystemOpenZFSConfiguration $OpenZFSConfiguration
 */
class CreateFileSystemRequest extends Request
{
    /**
     * @param array{
     *     ClientRequestToken?: string,
     *     FileSystemType: 'WINDOWS'|'LUSTRE'|'ONTAP'|'OPENZFS',
     *     StorageCapacity?: int<0, 2147483647>,
     *     StorageType?: 'SSD'|'HDD'|'INTELLIGENT_TIERING',
     *     SubnetIds: list<string>,
     *     SecurityGroupIds?: list<string>,
     *     Tags?: list<Shapes\Tag>,
     *     KmsKeyId?: string,
     *     WindowsConfiguration?: Shapes\CreateFileSystemWindowsConfiguration,
     *     LustreConfiguration?: Shapes\CreateFileSystemLustreConfiguration,
     *     OntapConfiguration?: Shapes\CreateFileSystemOntapConfiguration,
     *     FileSystemTypeVersion?: string,
     *     OpenZFSConfiguration?: Shapes\CreateFileSystemOpenZFSConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

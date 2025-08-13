<?php

namespace Sunaoka\Aws\Structures\FSx\CreateFileSystem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientRequestToken
 * @property 'WINDOWS'|'LUSTRE'|'ONTAP'|'OPENZFS' $FileSystemType
 * @property int<0, 2147483647>|null $StorageCapacity
 * @property 'SSD'|'HDD'|'INTELLIGENT_TIERING'|null $StorageType
 * @property list<string> $SubnetIds
 * @property list<string>|null $SecurityGroupIds
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $KmsKeyId
 * @property Shapes\CreateFileSystemWindowsConfiguration|null $WindowsConfiguration
 * @property Shapes\CreateFileSystemLustreConfiguration|null $LustreConfiguration
 * @property Shapes\CreateFileSystemOntapConfiguration|null $OntapConfiguration
 * @property string|null $FileSystemTypeVersion
 * @property Shapes\CreateFileSystemOpenZFSConfiguration|null $OpenZFSConfiguration
 * @property 'IPV4'|'DUAL'|null $NetworkType
 */
class CreateFileSystemRequest extends Request
{
    /**
     * @param array{
     *     ClientRequestToken?: string|null,
     *     FileSystemType: 'WINDOWS'|'LUSTRE'|'ONTAP'|'OPENZFS',
     *     StorageCapacity?: int<0, 2147483647>|null,
     *     StorageType?: 'SSD'|'HDD'|'INTELLIGENT_TIERING'|null,
     *     SubnetIds: list<string>,
     *     SecurityGroupIds?: list<string>|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     KmsKeyId?: string|null,
     *     WindowsConfiguration?: Shapes\CreateFileSystemWindowsConfiguration|null,
     *     LustreConfiguration?: Shapes\CreateFileSystemLustreConfiguration|null,
     *     OntapConfiguration?: Shapes\CreateFileSystemOntapConfiguration|null,
     *     FileSystemTypeVersion?: string|null,
     *     OpenZFSConfiguration?: Shapes\CreateFileSystemOpenZFSConfiguration|null,
     *     NetworkType?: 'IPV4'|'DUAL'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

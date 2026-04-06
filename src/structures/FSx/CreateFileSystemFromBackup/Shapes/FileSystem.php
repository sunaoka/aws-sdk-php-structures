<?php

namespace Sunaoka\Aws\Structures\FSx\CreateFileSystemFromBackup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OwnerId
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property string|null $FileSystemId
 * @property 'WINDOWS'|'LUSTRE'|'ONTAP'|'OPENZFS'|null $FileSystemType
 * @property 'AVAILABLE'|'CREATING'|'FAILED'|'DELETING'|'MISCONFIGURED'|'UPDATING'|'MISCONFIGURED_UNAVAILABLE'|null $Lifecycle
 * @property FileSystemFailureDetails|null $FailureDetails
 * @property int<0, 2147483647>|null $StorageCapacity
 * @property 'SSD'|'HDD'|'INTELLIGENT_TIERING'|null $StorageType
 * @property string|null $VpcId
 * @property list<string>|null $SubnetIds
 * @property list<string>|null $NetworkInterfaceIds
 * @property string|null $DNSName
 * @property string|null $KmsKeyId
 * @property string|null $ResourceARN
 * @property list<Tag>|null $Tags
 * @property WindowsFileSystemConfiguration|null $WindowsConfiguration
 * @property LustreFileSystemConfiguration|null $LustreConfiguration
 * @property list<AdministrativeAction>|null $AdministrativeActions
 * @property OntapFileSystemConfiguration|null $OntapConfiguration
 * @property string|null $FileSystemTypeVersion
 * @property OpenZFSFileSystemConfiguration|null $OpenZFSConfiguration
 */
class FileSystem extends Shape
{
    /**
     * @param array{
     *     OwnerId?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     FileSystemId?: string|null,
     *     FileSystemType?: 'WINDOWS'|'LUSTRE'|'ONTAP'|'OPENZFS'|null,
     *     Lifecycle?: 'AVAILABLE'|'CREATING'|'FAILED'|'DELETING'|'MISCONFIGURED'|'UPDATING'|'MISCONFIGURED_UNAVAILABLE'|null,
     *     FailureDetails?: FileSystemFailureDetails|null,
     *     StorageCapacity?: int<0, 2147483647>|null,
     *     StorageType?: 'SSD'|'HDD'|'INTELLIGENT_TIERING'|null,
     *     VpcId?: string|null,
     *     SubnetIds?: list<string>|null,
     *     NetworkInterfaceIds?: list<string>|null,
     *     DNSName?: string|null,
     *     KmsKeyId?: string|null,
     *     ResourceARN?: string|null,
     *     Tags?: list<Tag>|null,
     *     WindowsConfiguration?: WindowsFileSystemConfiguration|null,
     *     LustreConfiguration?: LustreFileSystemConfiguration|null,
     *     AdministrativeActions?: list<AdministrativeAction>|null,
     *     OntapConfiguration?: OntapFileSystemConfiguration|null,
     *     FileSystemTypeVersion?: string|null,
     *     OpenZFSConfiguration?: OpenZFSFileSystemConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

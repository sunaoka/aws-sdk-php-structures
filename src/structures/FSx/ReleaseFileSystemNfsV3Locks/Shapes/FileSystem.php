<?php

namespace Sunaoka\Aws\Structures\FSx\ReleaseFileSystemNfsV3Locks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OwnerId
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property string $FileSystemId
 * @property 'WINDOWS'|'LUSTRE'|'ONTAP'|'OPENZFS' $FileSystemType
 * @property 'AVAILABLE'|'CREATING'|'FAILED'|'DELETING'|'MISCONFIGURED'|'UPDATING'|'MISCONFIGURED_UNAVAILABLE' $Lifecycle
 * @property FileSystemFailureDetails $FailureDetails
 * @property int<0, 2147483647> $StorageCapacity
 * @property 'SSD'|'HDD'|'INTELLIGENT_TIERING' $StorageType
 * @property string $VpcId
 * @property list<string> $SubnetIds
 * @property list<string> $NetworkInterfaceIds
 * @property string $DNSName
 * @property string $KmsKeyId
 * @property string $ResourceARN
 * @property list<Tag> $Tags
 * @property WindowsFileSystemConfiguration $WindowsConfiguration
 * @property LustreFileSystemConfiguration $LustreConfiguration
 * @property list<AdministrativeAction> $AdministrativeActions
 * @property OntapFileSystemConfiguration $OntapConfiguration
 * @property string $FileSystemTypeVersion
 * @property OpenZFSFileSystemConfiguration $OpenZFSConfiguration
 */
class FileSystem extends Shape
{
    /**
     * @param array{
     *     OwnerId?: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     FileSystemId?: string,
     *     FileSystemType?: 'WINDOWS'|'LUSTRE'|'ONTAP'|'OPENZFS',
     *     Lifecycle?: 'AVAILABLE'|'CREATING'|'FAILED'|'DELETING'|'MISCONFIGURED'|'UPDATING'|'MISCONFIGURED_UNAVAILABLE',
     *     FailureDetails?: FileSystemFailureDetails,
     *     StorageCapacity?: int<0, 2147483647>,
     *     StorageType?: 'SSD'|'HDD'|'INTELLIGENT_TIERING',
     *     VpcId?: string,
     *     SubnetIds?: list<string>,
     *     NetworkInterfaceIds?: list<string>,
     *     DNSName?: string,
     *     KmsKeyId?: string,
     *     ResourceARN?: string,
     *     Tags?: list<Tag>,
     *     WindowsConfiguration?: WindowsFileSystemConfiguration,
     *     LustreConfiguration?: LustreFileSystemConfiguration,
     *     AdministrativeActions?: list<AdministrativeAction>,
     *     OntapConfiguration?: OntapFileSystemConfiguration,
     *     FileSystemTypeVersion?: string,
     *     OpenZFSConfiguration?: OpenZFSFileSystemConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

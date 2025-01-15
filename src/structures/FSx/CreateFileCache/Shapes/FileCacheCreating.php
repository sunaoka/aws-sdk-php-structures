<?php

namespace Sunaoka\Aws\Structures\FSx\CreateFileCache\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OwnerId
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property string|null $FileCacheId
 * @property 'LUSTRE'|null $FileCacheType
 * @property string|null $FileCacheTypeVersion
 * @property 'AVAILABLE'|'CREATING'|'DELETING'|'UPDATING'|'FAILED'|null $Lifecycle
 * @property FileCacheFailureDetails|null $FailureDetails
 * @property int<0, 2147483647>|null $StorageCapacity
 * @property string|null $VpcId
 * @property list<string>|null $SubnetIds
 * @property list<string>|null $NetworkInterfaceIds
 * @property string|null $DNSName
 * @property string|null $KmsKeyId
 * @property string|null $ResourceARN
 * @property list<Tag>|null $Tags
 * @property bool|null $CopyTagsToDataRepositoryAssociations
 * @property FileCacheLustreConfiguration|null $LustreConfiguration
 * @property list<string>|null $DataRepositoryAssociationIds
 */
class FileCacheCreating extends Shape
{
    /**
     * @param array{
     *     OwnerId?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     FileCacheId?: string|null,
     *     FileCacheType?: 'LUSTRE'|null,
     *     FileCacheTypeVersion?: string|null,
     *     Lifecycle?: 'AVAILABLE'|'CREATING'|'DELETING'|'UPDATING'|'FAILED'|null,
     *     FailureDetails?: FileCacheFailureDetails|null,
     *     StorageCapacity?: int<0, 2147483647>|null,
     *     VpcId?: string|null,
     *     SubnetIds?: list<string>|null,
     *     NetworkInterfaceIds?: list<string>|null,
     *     DNSName?: string|null,
     *     KmsKeyId?: string|null,
     *     ResourceARN?: string|null,
     *     Tags?: list<Tag>|null,
     *     CopyTagsToDataRepositoryAssociations?: bool|null,
     *     LustreConfiguration?: FileCacheLustreConfiguration|null,
     *     DataRepositoryAssociationIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

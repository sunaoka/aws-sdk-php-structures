<?php

namespace Sunaoka\Aws\Structures\FSx\CreateFileCache\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OwnerId
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property string $FileCacheId
 * @property 'LUSTRE' $FileCacheType
 * @property string $FileCacheTypeVersion
 * @property 'AVAILABLE'|'CREATING'|'DELETING'|'UPDATING'|'FAILED' $Lifecycle
 * @property FileCacheFailureDetails $FailureDetails
 * @property int $StorageCapacity
 * @property string $VpcId
 * @property list<string> $SubnetIds
 * @property list<string> $NetworkInterfaceIds
 * @property string $DNSName
 * @property string $KmsKeyId
 * @property string $ResourceARN
 * @property list<Tag> $Tags
 * @property bool $CopyTagsToDataRepositoryAssociations
 * @property FileCacheLustreConfiguration $LustreConfiguration
 * @property list<string> $DataRepositoryAssociationIds
 */
class FileCacheCreating extends Shape
{
    /**
     * @param array{
     *     OwnerId?: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     FileCacheId?: string,
     *     FileCacheType?: 'LUSTRE',
     *     FileCacheTypeVersion?: string,
     *     Lifecycle?: 'AVAILABLE'|'CREATING'|'DELETING'|'UPDATING'|'FAILED',
     *     FailureDetails?: FileCacheFailureDetails,
     *     StorageCapacity?: int,
     *     VpcId?: string,
     *     SubnetIds?: list<string>,
     *     NetworkInterfaceIds?: list<string>,
     *     DNSName?: string,
     *     KmsKeyId?: string,
     *     ResourceARN?: string,
     *     Tags?: list<Tag>,
     *     CopyTagsToDataRepositoryAssociations?: bool,
     *     LustreConfiguration?: FileCacheLustreConfiguration,
     *     DataRepositoryAssociationIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

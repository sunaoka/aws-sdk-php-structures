<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeFileCaches\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OwnerId
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property string $FileCacheId
 * @property 'LUSTRE' $FileCacheType
 * @property string $FileCacheTypeVersion
 * @property 'AVAILABLE'|'CREATING'|'DELETING'|'UPDATING'|'FAILED' $Lifecycle
 * @property FileCacheFailureDetails $FailureDetails
 * @property int<0, 2147483647> $StorageCapacity
 * @property string $VpcId
 * @property list<string> $SubnetIds
 * @property list<string> $NetworkInterfaceIds
 * @property string $DNSName
 * @property string $KmsKeyId
 * @property string $ResourceARN
 * @property FileCacheLustreConfiguration $LustreConfiguration
 * @property list<string> $DataRepositoryAssociationIds
 */
class FileCache extends Shape
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
     *     StorageCapacity?: int<0, 2147483647>,
     *     VpcId?: string,
     *     SubnetIds?: list<string>,
     *     NetworkInterfaceIds?: list<string>,
     *     DNSName?: string,
     *     KmsKeyId?: string,
     *     ResourceARN?: string,
     *     LustreConfiguration?: FileCacheLustreConfiguration,
     *     DataRepositoryAssociationIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

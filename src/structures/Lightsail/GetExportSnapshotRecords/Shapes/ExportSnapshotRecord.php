<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetExportSnapshotRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property ResourceLocation $location
 * @property 'ContainerService'|'Instance'|'StaticIp'|'KeyPair'|'InstanceSnapshot'|'Domain'|'PeeredVpc'|'LoadBalancer'|'LoadBalancerTlsCertificate'|'Disk'|'DiskSnapshot'|'RelationalDatabase'|'RelationalDatabaseSnapshot'|'ExportSnapshotRecord'|'CloudFormationStackRecord'|'Alarm'|'ContactMethod'|'Distribution'|'Certificate'|'Bucket' $resourceType
 * @property 'Started'|'Succeeded'|'Failed' $state
 * @property ExportSnapshotRecordSourceInfo $sourceInfo
 * @property DestinationInfo $destinationInfo
 */
class ExportSnapshotRecord extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     arn?: string,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     location?: ResourceLocation,
     *     resourceType?: 'ContainerService'|'Instance'|'StaticIp'|'KeyPair'|'InstanceSnapshot'|'Domain'|'PeeredVpc'|'LoadBalancer'|'LoadBalancerTlsCertificate'|'Disk'|'DiskSnapshot'|'RelationalDatabase'|'RelationalDatabaseSnapshot'|'ExportSnapshotRecord'|'CloudFormationStackRecord'|'Alarm'|'ContactMethod'|'Distribution'|'Certificate'|'Bucket',
     *     state?: 'Started'|'Succeeded'|'Failed',
     *     sourceInfo?: ExportSnapshotRecordSourceInfo,
     *     destinationInfo?: DestinationInfo
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\SnowBall\DescribeCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ClusterId
 * @property string|null $Description
 * @property string|null $KmsKeyARN
 * @property string|null $RoleARN
 * @property 'AwaitingQuorum'|'Pending'|'InUse'|'Complete'|'Cancelled'|null $ClusterState
 * @property 'IMPORT'|'EXPORT'|'LOCAL_USE'|null $JobType
 * @property 'STANDARD'|'EDGE'|'EDGE_C'|'EDGE_CG'|'EDGE_S'|'SNC1_HDD'|'SNC1_SSD'|'V3_5C'|'V3_5S'|'RACK_5U_C'|null $SnowballType
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 * @property JobResource|null $Resources
 * @property string|null $AddressId
 * @property 'SECOND_DAY'|'NEXT_DAY'|'EXPRESS'|'STANDARD'|null $ShippingOption
 * @property Notification|null $Notification
 * @property string|null $ForwardingAddressId
 * @property TaxDocuments|null $TaxDocuments
 * @property OnDeviceServiceConfiguration|null $OnDeviceServiceConfiguration
 */
class ClusterMetadata extends Shape
{
    /**
     * @param array{
     *     ClusterId?: string|null,
     *     Description?: string|null,
     *     KmsKeyARN?: string|null,
     *     RoleARN?: string|null,
     *     ClusterState?: 'AwaitingQuorum'|'Pending'|'InUse'|'Complete'|'Cancelled'|null,
     *     JobType?: 'IMPORT'|'EXPORT'|'LOCAL_USE'|null,
     *     SnowballType?: 'STANDARD'|'EDGE'|'EDGE_C'|'EDGE_CG'|'EDGE_S'|'SNC1_HDD'|'SNC1_SSD'|'V3_5C'|'V3_5S'|'RACK_5U_C'|null,
     *     CreationDate?: \Aws\Api\DateTimeResult|null,
     *     Resources?: JobResource|null,
     *     AddressId?: string|null,
     *     ShippingOption?: 'SECOND_DAY'|'NEXT_DAY'|'EXPRESS'|'STANDARD'|null,
     *     Notification?: Notification|null,
     *     ForwardingAddressId?: string|null,
     *     TaxDocuments?: TaxDocuments|null,
     *     OnDeviceServiceConfiguration?: OnDeviceServiceConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

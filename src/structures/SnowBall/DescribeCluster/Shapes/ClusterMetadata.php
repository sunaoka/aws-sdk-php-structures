<?php

namespace Sunaoka\Aws\Structures\SnowBall\DescribeCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClusterId
 * @property string $Description
 * @property string $KmsKeyARN
 * @property string $RoleARN
 * @property 'AwaitingQuorum'|'Pending'|'InUse'|'Complete'|'Cancelled' $ClusterState
 * @property 'IMPORT'|'EXPORT'|'LOCAL_USE' $JobType
 * @property 'STANDARD'|'EDGE'|'EDGE_C'|'EDGE_CG'|'EDGE_S'|'SNC1_HDD'|'SNC1_SSD'|'V3_5C'|'V3_5S'|'RACK_5U_C' $SnowballType
 * @property \Aws\Api\DateTimeResult $CreationDate
 * @property JobResource $Resources
 * @property string $AddressId
 * @property 'SECOND_DAY'|'NEXT_DAY'|'EXPRESS'|'STANDARD' $ShippingOption
 * @property Notification $Notification
 * @property string $ForwardingAddressId
 * @property TaxDocuments $TaxDocuments
 * @property OnDeviceServiceConfiguration $OnDeviceServiceConfiguration
 */
class ClusterMetadata extends Shape
{
    /**
     * @param array{
     *     ClusterId?: string,
     *     Description?: string,
     *     KmsKeyARN?: string,
     *     RoleARN?: string,
     *     ClusterState?: 'AwaitingQuorum'|'Pending'|'InUse'|'Complete'|'Cancelled',
     *     JobType?: 'IMPORT'|'EXPORT'|'LOCAL_USE',
     *     SnowballType?: 'STANDARD'|'EDGE'|'EDGE_C'|'EDGE_CG'|'EDGE_S'|'SNC1_HDD'|'SNC1_SSD'|'V3_5C'|'V3_5S'|'RACK_5U_C',
     *     CreationDate?: \Aws\Api\DateTimeResult,
     *     Resources?: JobResource,
     *     AddressId?: string,
     *     ShippingOption?: 'SECOND_DAY'|'NEXT_DAY'|'EXPRESS'|'STANDARD',
     *     Notification?: Notification,
     *     ForwardingAddressId?: string,
     *     TaxDocuments?: TaxDocuments,
     *     OnDeviceServiceConfiguration?: OnDeviceServiceConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

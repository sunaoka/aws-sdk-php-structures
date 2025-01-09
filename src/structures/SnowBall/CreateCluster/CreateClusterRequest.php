<?php

namespace Sunaoka\Aws\Structures\SnowBall\CreateCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'IMPORT'|'EXPORT'|'LOCAL_USE' $JobType
 * @property Shapes\JobResource $Resources
 * @property Shapes\OnDeviceServiceConfiguration $OnDeviceServiceConfiguration
 * @property string $Description
 * @property string $AddressId
 * @property string $KmsKeyARN
 * @property string $RoleARN
 * @property 'STANDARD'|'EDGE'|'EDGE_C'|'EDGE_CG'|'EDGE_S'|'SNC1_HDD'|'SNC1_SSD'|'V3_5C'|'V3_5S'|'RACK_5U_C' $SnowballType
 * @property 'SECOND_DAY'|'NEXT_DAY'|'EXPRESS'|'STANDARD' $ShippingOption
 * @property Shapes\Notification $Notification
 * @property string $ForwardingAddressId
 * @property Shapes\TaxDocuments $TaxDocuments
 * @property 'INSTALLED_ONLY'|'INSTALLED_AUTOSTART'|'NOT_INSTALLED' $RemoteManagement
 * @property int $InitialClusterSize
 * @property bool $ForceCreateJobs
 * @property list<string> $LongTermPricingIds
 * @property 'T50'|'T80'|'T100'|'T42'|'T98'|'T8'|'T14'|'T32'|'NoPreference'|'T240'|'T13' $SnowballCapacityPreference
 */
class CreateClusterRequest extends Request
{
    /**
     * @param array{
     *     JobType: 'IMPORT'|'EXPORT'|'LOCAL_USE',
     *     Resources?: Shapes\JobResource,
     *     OnDeviceServiceConfiguration?: Shapes\OnDeviceServiceConfiguration,
     *     Description?: string,
     *     AddressId: string,
     *     KmsKeyARN?: string,
     *     RoleARN?: string,
     *     SnowballType: 'STANDARD'|'EDGE'|'EDGE_C'|'EDGE_CG'|'EDGE_S'|'SNC1_HDD'|'SNC1_SSD'|'V3_5C'|'V3_5S'|'RACK_5U_C',
     *     ShippingOption: 'SECOND_DAY'|'NEXT_DAY'|'EXPRESS'|'STANDARD',
     *     Notification?: Shapes\Notification,
     *     ForwardingAddressId?: string,
     *     TaxDocuments?: Shapes\TaxDocuments,
     *     RemoteManagement?: 'INSTALLED_ONLY'|'INSTALLED_AUTOSTART'|'NOT_INSTALLED',
     *     InitialClusterSize?: int,
     *     ForceCreateJobs?: bool,
     *     LongTermPricingIds?: list<string>,
     *     SnowballCapacityPreference?: 'T50'|'T80'|'T100'|'T42'|'T98'|'T8'|'T14'|'T32'|'NoPreference'|'T240'|'T13'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

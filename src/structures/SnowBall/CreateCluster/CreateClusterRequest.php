<?php

namespace Sunaoka\Aws\Structures\SnowBall\CreateCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'IMPORT'|'EXPORT'|'LOCAL_USE' $JobType
 * @property Shapes\JobResource|null $Resources
 * @property Shapes\OnDeviceServiceConfiguration|null $OnDeviceServiceConfiguration
 * @property string|null $Description
 * @property string $AddressId
 * @property string|null $KmsKeyARN
 * @property string|null $RoleARN
 * @property 'STANDARD'|'EDGE'|'EDGE_C'|'EDGE_CG'|'EDGE_S'|'SNC1_HDD'|'SNC1_SSD'|'V3_5C'|'V3_5S'|'RACK_5U_C' $SnowballType
 * @property 'SECOND_DAY'|'NEXT_DAY'|'EXPRESS'|'STANDARD' $ShippingOption
 * @property Shapes\Notification|null $Notification
 * @property string|null $ForwardingAddressId
 * @property Shapes\TaxDocuments|null $TaxDocuments
 * @property 'INSTALLED_ONLY'|'INSTALLED_AUTOSTART'|'NOT_INSTALLED'|null $RemoteManagement
 * @property int<0, 16>|null $InitialClusterSize
 * @property bool|null $ForceCreateJobs
 * @property list<string>|null $LongTermPricingIds
 * @property 'T50'|'T80'|'T100'|'T42'|'T98'|'T8'|'T14'|'T32'|'NoPreference'|'T240'|'T13'|null $SnowballCapacityPreference
 */
class CreateClusterRequest extends Request
{
    /**
     * @param array{
     *     JobType: 'IMPORT'|'EXPORT'|'LOCAL_USE',
     *     Resources?: Shapes\JobResource|null,
     *     OnDeviceServiceConfiguration?: Shapes\OnDeviceServiceConfiguration|null,
     *     Description?: string|null,
     *     AddressId: string,
     *     KmsKeyARN?: string|null,
     *     RoleARN?: string|null,
     *     SnowballType: 'STANDARD'|'EDGE'|'EDGE_C'|'EDGE_CG'|'EDGE_S'|'SNC1_HDD'|'SNC1_SSD'|'V3_5C'|'V3_5S'|'RACK_5U_C',
     *     ShippingOption: 'SECOND_DAY'|'NEXT_DAY'|'EXPRESS'|'STANDARD',
     *     Notification?: Shapes\Notification|null,
     *     ForwardingAddressId?: string|null,
     *     TaxDocuments?: Shapes\TaxDocuments|null,
     *     RemoteManagement?: 'INSTALLED_ONLY'|'INSTALLED_AUTOSTART'|'NOT_INSTALLED'|null,
     *     InitialClusterSize?: int<0, 16>|null,
     *     ForceCreateJobs?: bool|null,
     *     LongTermPricingIds?: list<string>|null,
     *     SnowballCapacityPreference?: 'T50'|'T80'|'T100'|'T42'|'T98'|'T8'|'T14'|'T32'|'NoPreference'|'T240'|'T13'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

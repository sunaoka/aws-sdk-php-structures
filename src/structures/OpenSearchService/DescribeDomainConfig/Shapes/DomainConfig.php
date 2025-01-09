<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeDomainConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VersionStatus $EngineVersion
 * @property ClusterConfigStatus $ClusterConfig
 * @property EBSOptionsStatus $EBSOptions
 * @property AccessPoliciesStatus $AccessPolicies
 * @property IPAddressTypeStatus $IPAddressType
 * @property SnapshotOptionsStatus $SnapshotOptions
 * @property VPCDerivedInfoStatus $VPCOptions
 * @property CognitoOptionsStatus $CognitoOptions
 * @property EncryptionAtRestOptionsStatus $EncryptionAtRestOptions
 * @property NodeToNodeEncryptionOptionsStatus $NodeToNodeEncryptionOptions
 * @property AdvancedOptionsStatus $AdvancedOptions
 * @property LogPublishingOptionsStatus $LogPublishingOptions
 * @property DomainEndpointOptionsStatus $DomainEndpointOptions
 * @property AdvancedSecurityOptionsStatus $AdvancedSecurityOptions
 * @property IdentityCenterOptionsStatus $IdentityCenterOptions
 * @property AutoTuneOptionsStatus $AutoTuneOptions
 * @property ChangeProgressDetails $ChangeProgressDetails
 * @property OffPeakWindowOptionsStatus $OffPeakWindowOptions
 * @property SoftwareUpdateOptionsStatus $SoftwareUpdateOptions
 * @property list<ModifyingProperties> $ModifyingProperties
 * @property AIMLOptionsStatus $AIMLOptions
 */
class DomainConfig extends Shape
{
    /**
     * @param array{
     *     EngineVersion?: VersionStatus,
     *     ClusterConfig?: ClusterConfigStatus,
     *     EBSOptions?: EBSOptionsStatus,
     *     AccessPolicies?: AccessPoliciesStatus,
     *     IPAddressType?: IPAddressTypeStatus,
     *     SnapshotOptions?: SnapshotOptionsStatus,
     *     VPCOptions?: VPCDerivedInfoStatus,
     *     CognitoOptions?: CognitoOptionsStatus,
     *     EncryptionAtRestOptions?: EncryptionAtRestOptionsStatus,
     *     NodeToNodeEncryptionOptions?: NodeToNodeEncryptionOptionsStatus,
     *     AdvancedOptions?: AdvancedOptionsStatus,
     *     LogPublishingOptions?: LogPublishingOptionsStatus,
     *     DomainEndpointOptions?: DomainEndpointOptionsStatus,
     *     AdvancedSecurityOptions?: AdvancedSecurityOptionsStatus,
     *     IdentityCenterOptions?: IdentityCenterOptionsStatus,
     *     AutoTuneOptions?: AutoTuneOptionsStatus,
     *     ChangeProgressDetails?: ChangeProgressDetails,
     *     OffPeakWindowOptions?: OffPeakWindowOptionsStatus,
     *     SoftwareUpdateOptions?: SoftwareUpdateOptionsStatus,
     *     ModifyingProperties?: list<ModifyingProperties>,
     *     AIMLOptions?: AIMLOptionsStatus
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

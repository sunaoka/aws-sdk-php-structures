<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\UpdateDomainConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VersionStatus|null $EngineVersion
 * @property ClusterConfigStatus|null $ClusterConfig
 * @property EBSOptionsStatus|null $EBSOptions
 * @property AccessPoliciesStatus|null $AccessPolicies
 * @property IPAddressTypeStatus|null $IPAddressType
 * @property SnapshotOptionsStatus|null $SnapshotOptions
 * @property VPCDerivedInfoStatus|null $VPCOptions
 * @property CognitoOptionsStatus|null $CognitoOptions
 * @property EncryptionAtRestOptionsStatus|null $EncryptionAtRestOptions
 * @property NodeToNodeEncryptionOptionsStatus|null $NodeToNodeEncryptionOptions
 * @property AdvancedOptionsStatus|null $AdvancedOptions
 * @property LogPublishingOptionsStatus|null $LogPublishingOptions
 * @property DomainEndpointOptionsStatus|null $DomainEndpointOptions
 * @property AdvancedSecurityOptionsStatus|null $AdvancedSecurityOptions
 * @property IdentityCenterOptionsStatus|null $IdentityCenterOptions
 * @property AutoTuneOptionsStatus|null $AutoTuneOptions
 * @property ChangeProgressDetails|null $ChangeProgressDetails
 * @property OffPeakWindowOptionsStatus|null $OffPeakWindowOptions
 * @property SoftwareUpdateOptionsStatus|null $SoftwareUpdateOptions
 * @property list<ModifyingProperties>|null $ModifyingProperties
 * @property AIMLOptionsStatus|null $AIMLOptions
 */
class DomainConfig extends Shape
{
    /**
     * @param array{
     *     EngineVersion?: VersionStatus|null,
     *     ClusterConfig?: ClusterConfigStatus|null,
     *     EBSOptions?: EBSOptionsStatus|null,
     *     AccessPolicies?: AccessPoliciesStatus|null,
     *     IPAddressType?: IPAddressTypeStatus|null,
     *     SnapshotOptions?: SnapshotOptionsStatus|null,
     *     VPCOptions?: VPCDerivedInfoStatus|null,
     *     CognitoOptions?: CognitoOptionsStatus|null,
     *     EncryptionAtRestOptions?: EncryptionAtRestOptionsStatus|null,
     *     NodeToNodeEncryptionOptions?: NodeToNodeEncryptionOptionsStatus|null,
     *     AdvancedOptions?: AdvancedOptionsStatus|null,
     *     LogPublishingOptions?: LogPublishingOptionsStatus|null,
     *     DomainEndpointOptions?: DomainEndpointOptionsStatus|null,
     *     AdvancedSecurityOptions?: AdvancedSecurityOptionsStatus|null,
     *     IdentityCenterOptions?: IdentityCenterOptionsStatus|null,
     *     AutoTuneOptions?: AutoTuneOptionsStatus|null,
     *     ChangeProgressDetails?: ChangeProgressDetails|null,
     *     OffPeakWindowOptions?: OffPeakWindowOptionsStatus|null,
     *     SoftwareUpdateOptions?: SoftwareUpdateOptionsStatus|null,
     *     ModifyingProperties?: list<ModifyingProperties>|null,
     *     AIMLOptions?: AIMLOptionsStatus|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

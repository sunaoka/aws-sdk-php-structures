<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DeleteDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DomainId
 * @property string $DomainName
 * @property string $ARN
 * @property bool|null $Created
 * @property bool|null $Deleted
 * @property string|null $Endpoint
 * @property string|null $EndpointV2
 * @property array<string, string>|null $Endpoints
 * @property string|null $DomainEndpointV2HostedZoneId
 * @property bool|null $Processing
 * @property bool|null $UpgradeProcessing
 * @property string|null $EngineVersion
 * @property ClusterConfig $ClusterConfig
 * @property EBSOptions|null $EBSOptions
 * @property string|null $AccessPolicies
 * @property 'ipv4'|'dualstack'|null $IPAddressType
 * @property SnapshotOptions|null $SnapshotOptions
 * @property VPCDerivedInfo|null $VPCOptions
 * @property CognitoOptions|null $CognitoOptions
 * @property EncryptionAtRestOptions|null $EncryptionAtRestOptions
 * @property NodeToNodeEncryptionOptions|null $NodeToNodeEncryptionOptions
 * @property array<string, string>|null $AdvancedOptions
 * @property array<'INDEX_SLOW_LOGS'|'SEARCH_SLOW_LOGS'|'ES_APPLICATION_LOGS'|'AUDIT_LOGS', LogPublishingOption>|null $LogPublishingOptions
 * @property ServiceSoftwareOptions|null $ServiceSoftwareOptions
 * @property DomainEndpointOptions|null $DomainEndpointOptions
 * @property AdvancedSecurityOptions|null $AdvancedSecurityOptions
 * @property IdentityCenterOptions|null $IdentityCenterOptions
 * @property AutoTuneOptionsOutput|null $AutoTuneOptions
 * @property ChangeProgressDetails|null $ChangeProgressDetails
 * @property OffPeakWindowOptions|null $OffPeakWindowOptions
 * @property SoftwareUpdateOptions|null $SoftwareUpdateOptions
 * @property 'Creating'|'Active'|'Modifying'|'UpgradingEngineVersion'|'UpdatingServiceSoftware'|'Isolated'|'Deleting'|null $DomainProcessingStatus
 * @property list<ModifyingProperties>|null $ModifyingProperties
 * @property AIMLOptionsOutput|null $AIMLOptions
 */
class DomainStatus extends Shape
{
    /**
     * @param array{
     *     DomainId: string,
     *     DomainName: string,
     *     ARN: string,
     *     Created?: bool|null,
     *     Deleted?: bool|null,
     *     Endpoint?: string|null,
     *     EndpointV2?: string|null,
     *     Endpoints?: array<string, string>|null,
     *     DomainEndpointV2HostedZoneId?: string|null,
     *     Processing?: bool|null,
     *     UpgradeProcessing?: bool|null,
     *     EngineVersion?: string|null,
     *     ClusterConfig: ClusterConfig,
     *     EBSOptions?: EBSOptions|null,
     *     AccessPolicies?: string|null,
     *     IPAddressType?: 'ipv4'|'dualstack'|null,
     *     SnapshotOptions?: SnapshotOptions|null,
     *     VPCOptions?: VPCDerivedInfo|null,
     *     CognitoOptions?: CognitoOptions|null,
     *     EncryptionAtRestOptions?: EncryptionAtRestOptions|null,
     *     NodeToNodeEncryptionOptions?: NodeToNodeEncryptionOptions|null,
     *     AdvancedOptions?: array<string, string>|null,
     *     LogPublishingOptions?: array<'INDEX_SLOW_LOGS'|'SEARCH_SLOW_LOGS'|'ES_APPLICATION_LOGS'|'AUDIT_LOGS', LogPublishingOption>|null,
     *     ServiceSoftwareOptions?: ServiceSoftwareOptions|null,
     *     DomainEndpointOptions?: DomainEndpointOptions|null,
     *     AdvancedSecurityOptions?: AdvancedSecurityOptions|null,
     *     IdentityCenterOptions?: IdentityCenterOptions|null,
     *     AutoTuneOptions?: AutoTuneOptionsOutput|null,
     *     ChangeProgressDetails?: ChangeProgressDetails|null,
     *     OffPeakWindowOptions?: OffPeakWindowOptions|null,
     *     SoftwareUpdateOptions?: SoftwareUpdateOptions|null,
     *     DomainProcessingStatus?: 'Creating'|'Active'|'Modifying'|'UpgradingEngineVersion'|'UpdatingServiceSoftware'|'Isolated'|'Deleting'|null,
     *     ModifyingProperties?: list<ModifyingProperties>|null,
     *     AIMLOptions?: AIMLOptionsOutput|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

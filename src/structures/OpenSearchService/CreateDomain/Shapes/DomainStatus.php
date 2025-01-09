<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\CreateDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DomainId
 * @property string $DomainName
 * @property string $ARN
 * @property bool $Created
 * @property bool $Deleted
 * @property string $Endpoint
 * @property string $EndpointV2
 * @property array<string, string> $Endpoints
 * @property string $DomainEndpointV2HostedZoneId
 * @property bool $Processing
 * @property bool $UpgradeProcessing
 * @property string $EngineVersion
 * @property ClusterConfig $ClusterConfig
 * @property EBSOptions $EBSOptions
 * @property string $AccessPolicies
 * @property 'ipv4'|'dualstack' $IPAddressType
 * @property SnapshotOptions $SnapshotOptions
 * @property VPCDerivedInfo $VPCOptions
 * @property CognitoOptions $CognitoOptions
 * @property EncryptionAtRestOptions $EncryptionAtRestOptions
 * @property NodeToNodeEncryptionOptions $NodeToNodeEncryptionOptions
 * @property array<string, string> $AdvancedOptions
 * @property array<'INDEX_SLOW_LOGS'|'SEARCH_SLOW_LOGS'|'ES_APPLICATION_LOGS'|'AUDIT_LOGS', LogPublishingOption> $LogPublishingOptions
 * @property ServiceSoftwareOptions $ServiceSoftwareOptions
 * @property DomainEndpointOptions $DomainEndpointOptions
 * @property AdvancedSecurityOptions $AdvancedSecurityOptions
 * @property IdentityCenterOptions $IdentityCenterOptions
 * @property AutoTuneOptionsOutput $AutoTuneOptions
 * @property ChangeProgressDetails $ChangeProgressDetails
 * @property OffPeakWindowOptions $OffPeakWindowOptions
 * @property SoftwareUpdateOptions $SoftwareUpdateOptions
 * @property 'Creating'|'Active'|'Modifying'|'UpgradingEngineVersion'|'UpdatingServiceSoftware'|'Isolated'|'Deleting' $DomainProcessingStatus
 * @property list<ModifyingProperties> $ModifyingProperties
 * @property AIMLOptionsOutput $AIMLOptions
 */
class DomainStatus extends Shape
{
    /**
     * @param array{
     *     DomainId: string,
     *     DomainName: string,
     *     ARN: string,
     *     Created?: bool,
     *     Deleted?: bool,
     *     Endpoint?: string,
     *     EndpointV2?: string,
     *     Endpoints?: array<string, string>,
     *     DomainEndpointV2HostedZoneId?: string,
     *     Processing?: bool,
     *     UpgradeProcessing?: bool,
     *     EngineVersion?: string,
     *     ClusterConfig: ClusterConfig,
     *     EBSOptions?: EBSOptions,
     *     AccessPolicies?: string,
     *     IPAddressType?: 'ipv4'|'dualstack',
     *     SnapshotOptions?: SnapshotOptions,
     *     VPCOptions?: VPCDerivedInfo,
     *     CognitoOptions?: CognitoOptions,
     *     EncryptionAtRestOptions?: EncryptionAtRestOptions,
     *     NodeToNodeEncryptionOptions?: NodeToNodeEncryptionOptions,
     *     AdvancedOptions?: array<string, string>,
     *     LogPublishingOptions?: array<'INDEX_SLOW_LOGS'|'SEARCH_SLOW_LOGS'|'ES_APPLICATION_LOGS'|'AUDIT_LOGS', LogPublishingOption>,
     *     ServiceSoftwareOptions?: ServiceSoftwareOptions,
     *     DomainEndpointOptions?: DomainEndpointOptions,
     *     AdvancedSecurityOptions?: AdvancedSecurityOptions,
     *     IdentityCenterOptions?: IdentityCenterOptions,
     *     AutoTuneOptions?: AutoTuneOptionsOutput,
     *     ChangeProgressDetails?: ChangeProgressDetails,
     *     OffPeakWindowOptions?: OffPeakWindowOptions,
     *     SoftwareUpdateOptions?: SoftwareUpdateOptions,
     *     DomainProcessingStatus?: 'Creating'|'Active'|'Modifying'|'UpgradingEngineVersion'|'UpdatingServiceSoftware'|'Isolated'|'Deleting',
     *     ModifyingProperties?: list<ModifyingProperties>,
     *     AIMLOptions?: AIMLOptionsOutput
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

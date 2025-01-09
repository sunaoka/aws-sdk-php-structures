<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DescribeElasticsearchDomains\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DomainId
 * @property string $DomainName
 * @property string $ARN
 * @property bool $Created
 * @property bool $Deleted
 * @property string $Endpoint
 * @property array<string, string> $Endpoints
 * @property bool $Processing
 * @property bool $UpgradeProcessing
 * @property string $ElasticsearchVersion
 * @property ElasticsearchClusterConfig $ElasticsearchClusterConfig
 * @property EBSOptions $EBSOptions
 * @property string $AccessPolicies
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
 * @property AutoTuneOptionsOutput $AutoTuneOptions
 * @property ChangeProgressDetails $ChangeProgressDetails
 * @property 'Creating'|'Active'|'Modifying'|'UpgradingEngineVersion'|'UpdatingServiceSoftware'|'Isolated'|'Deleting' $DomainProcessingStatus
 * @property list<ModifyingProperties> $ModifyingProperties
 */
class ElasticsearchDomainStatus extends Shape
{
    /**
     * @param array{
     *     DomainId: string,
     *     DomainName: string,
     *     ARN: string,
     *     Created?: bool,
     *     Deleted?: bool,
     *     Endpoint?: string,
     *     Endpoints?: array<string, string>,
     *     Processing?: bool,
     *     UpgradeProcessing?: bool,
     *     ElasticsearchVersion?: string,
     *     ElasticsearchClusterConfig: ElasticsearchClusterConfig,
     *     EBSOptions?: EBSOptions,
     *     AccessPolicies?: string,
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
     *     AutoTuneOptions?: AutoTuneOptionsOutput,
     *     ChangeProgressDetails?: ChangeProgressDetails,
     *     DomainProcessingStatus?: 'Creating'|'Active'|'Modifying'|'UpgradingEngineVersion'|'UpdatingServiceSoftware'|'Isolated'|'Deleting',
     *     ModifyingProperties?: list<ModifyingProperties>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

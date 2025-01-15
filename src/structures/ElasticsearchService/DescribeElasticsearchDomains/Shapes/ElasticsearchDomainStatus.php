<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DescribeElasticsearchDomains\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DomainId
 * @property string $DomainName
 * @property string $ARN
 * @property bool|null $Created
 * @property bool|null $Deleted
 * @property string|null $Endpoint
 * @property array<string, string>|null $Endpoints
 * @property bool|null $Processing
 * @property bool|null $UpgradeProcessing
 * @property string|null $ElasticsearchVersion
 * @property ElasticsearchClusterConfig $ElasticsearchClusterConfig
 * @property EBSOptions|null $EBSOptions
 * @property string|null $AccessPolicies
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
 * @property AutoTuneOptionsOutput|null $AutoTuneOptions
 * @property ChangeProgressDetails|null $ChangeProgressDetails
 * @property 'Creating'|'Active'|'Modifying'|'UpgradingEngineVersion'|'UpdatingServiceSoftware'|'Isolated'|'Deleting'|null $DomainProcessingStatus
 * @property list<ModifyingProperties>|null $ModifyingProperties
 */
class ElasticsearchDomainStatus extends Shape
{
    /**
     * @param array{
     *     DomainId: string,
     *     DomainName: string,
     *     ARN: string,
     *     Created?: bool|null,
     *     Deleted?: bool|null,
     *     Endpoint?: string|null,
     *     Endpoints?: array<string, string>|null,
     *     Processing?: bool|null,
     *     UpgradeProcessing?: bool|null,
     *     ElasticsearchVersion?: string|null,
     *     ElasticsearchClusterConfig: ElasticsearchClusterConfig,
     *     EBSOptions?: EBSOptions|null,
     *     AccessPolicies?: string|null,
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
     *     AutoTuneOptions?: AutoTuneOptionsOutput|null,
     *     ChangeProgressDetails?: ChangeProgressDetails|null,
     *     DomainProcessingStatus?: 'Creating'|'Active'|'Modifying'|'UpgradingEngineVersion'|'UpdatingServiceSoftware'|'Isolated'|'Deleting'|null,
     *     ModifyingProperties?: list<ModifyingProperties>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\UpdateElasticsearchDomainConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property Shapes\ElasticsearchClusterConfig|null $ElasticsearchClusterConfig
 * @property Shapes\EBSOptions|null $EBSOptions
 * @property Shapes\SnapshotOptions|null $SnapshotOptions
 * @property Shapes\VPCOptions|null $VPCOptions
 * @property Shapes\CognitoOptions|null $CognitoOptions
 * @property array<string, string>|null $AdvancedOptions
 * @property string|null $AccessPolicies
 * @property array<'INDEX_SLOW_LOGS'|'SEARCH_SLOW_LOGS'|'ES_APPLICATION_LOGS'|'AUDIT_LOGS', Shapes\LogPublishingOption>|null $LogPublishingOptions
 * @property Shapes\DomainEndpointOptions|null $DomainEndpointOptions
 * @property Shapes\AdvancedSecurityOptionsInput|null $AdvancedSecurityOptions
 * @property Shapes\NodeToNodeEncryptionOptions|null $NodeToNodeEncryptionOptions
 * @property Shapes\EncryptionAtRestOptions|null $EncryptionAtRestOptions
 * @property Shapes\AutoTuneOptions|null $AutoTuneOptions
 * @property bool|null $DryRun
 */
class UpdateElasticsearchDomainConfigRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     ElasticsearchClusterConfig?: Shapes\ElasticsearchClusterConfig|null,
     *     EBSOptions?: Shapes\EBSOptions|null,
     *     SnapshotOptions?: Shapes\SnapshotOptions|null,
     *     VPCOptions?: Shapes\VPCOptions|null,
     *     CognitoOptions?: Shapes\CognitoOptions|null,
     *     AdvancedOptions?: array<string, string>|null,
     *     AccessPolicies?: string|null,
     *     LogPublishingOptions?: array<'INDEX_SLOW_LOGS'|'SEARCH_SLOW_LOGS'|'ES_APPLICATION_LOGS'|'AUDIT_LOGS', Shapes\LogPublishingOption>|null,
     *     DomainEndpointOptions?: Shapes\DomainEndpointOptions|null,
     *     AdvancedSecurityOptions?: Shapes\AdvancedSecurityOptionsInput|null,
     *     NodeToNodeEncryptionOptions?: Shapes\NodeToNodeEncryptionOptions|null,
     *     EncryptionAtRestOptions?: Shapes\EncryptionAtRestOptions|null,
     *     AutoTuneOptions?: Shapes\AutoTuneOptions|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

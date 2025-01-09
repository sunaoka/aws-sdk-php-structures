<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\UpdateElasticsearchDomainConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property Shapes\ElasticsearchClusterConfig $ElasticsearchClusterConfig
 * @property Shapes\EBSOptions $EBSOptions
 * @property Shapes\SnapshotOptions $SnapshotOptions
 * @property Shapes\VPCOptions $VPCOptions
 * @property Shapes\CognitoOptions $CognitoOptions
 * @property array<string, string> $AdvancedOptions
 * @property string $AccessPolicies
 * @property array<'INDEX_SLOW_LOGS'|'SEARCH_SLOW_LOGS'|'ES_APPLICATION_LOGS'|'AUDIT_LOGS', Shapes\LogPublishingOption> $LogPublishingOptions
 * @property Shapes\DomainEndpointOptions $DomainEndpointOptions
 * @property Shapes\AdvancedSecurityOptionsInput $AdvancedSecurityOptions
 * @property Shapes\NodeToNodeEncryptionOptions $NodeToNodeEncryptionOptions
 * @property Shapes\EncryptionAtRestOptions $EncryptionAtRestOptions
 * @property Shapes\AutoTuneOptions $AutoTuneOptions
 * @property bool $DryRun
 */
class UpdateElasticsearchDomainConfigRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     ElasticsearchClusterConfig?: Shapes\ElasticsearchClusterConfig,
     *     EBSOptions?: Shapes\EBSOptions,
     *     SnapshotOptions?: Shapes\SnapshotOptions,
     *     VPCOptions?: Shapes\VPCOptions,
     *     CognitoOptions?: Shapes\CognitoOptions,
     *     AdvancedOptions?: array<string, string>,
     *     AccessPolicies?: string,
     *     LogPublishingOptions?: array<'INDEX_SLOW_LOGS'|'SEARCH_SLOW_LOGS'|'ES_APPLICATION_LOGS'|'AUDIT_LOGS', Shapes\LogPublishingOption>,
     *     DomainEndpointOptions?: Shapes\DomainEndpointOptions,
     *     AdvancedSecurityOptions?: Shapes\AdvancedSecurityOptionsInput,
     *     NodeToNodeEncryptionOptions?: Shapes\NodeToNodeEncryptionOptions,
     *     EncryptionAtRestOptions?: Shapes\EncryptionAtRestOptions,
     *     AutoTuneOptions?: Shapes\AutoTuneOptions,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

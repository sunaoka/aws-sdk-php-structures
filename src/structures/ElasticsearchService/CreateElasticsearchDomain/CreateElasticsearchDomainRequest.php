<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\CreateElasticsearchDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $ElasticsearchVersion
 * @property Shapes\ElasticsearchClusterConfig $ElasticsearchClusterConfig
 * @property Shapes\EBSOptions $EBSOptions
 * @property string $AccessPolicies
 * @property Shapes\SnapshotOptions $SnapshotOptions
 * @property Shapes\VPCOptions $VPCOptions
 * @property Shapes\CognitoOptions $CognitoOptions
 * @property Shapes\EncryptionAtRestOptions $EncryptionAtRestOptions
 * @property Shapes\NodeToNodeEncryptionOptions $NodeToNodeEncryptionOptions
 * @property array<string, string> $AdvancedOptions
 * @property array<'INDEX_SLOW_LOGS'|'SEARCH_SLOW_LOGS'|'ES_APPLICATION_LOGS'|'AUDIT_LOGS', Shapes\LogPublishingOption> $LogPublishingOptions
 * @property Shapes\DomainEndpointOptions $DomainEndpointOptions
 * @property Shapes\AdvancedSecurityOptionsInput $AdvancedSecurityOptions
 * @property Shapes\AutoTuneOptionsInput $AutoTuneOptions
 * @property list<Shapes\Tag> $TagList
 */
class CreateElasticsearchDomainRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     ElasticsearchVersion?: string,
     *     ElasticsearchClusterConfig?: Shapes\ElasticsearchClusterConfig,
     *     EBSOptions?: Shapes\EBSOptions,
     *     AccessPolicies?: string,
     *     SnapshotOptions?: Shapes\SnapshotOptions,
     *     VPCOptions?: Shapes\VPCOptions,
     *     CognitoOptions?: Shapes\CognitoOptions,
     *     EncryptionAtRestOptions?: Shapes\EncryptionAtRestOptions,
     *     NodeToNodeEncryptionOptions?: Shapes\NodeToNodeEncryptionOptions,
     *     AdvancedOptions?: array<string, string>,
     *     LogPublishingOptions?: array<'INDEX_SLOW_LOGS'|'SEARCH_SLOW_LOGS'|'ES_APPLICATION_LOGS'|'AUDIT_LOGS', Shapes\LogPublishingOption>,
     *     DomainEndpointOptions?: Shapes\DomainEndpointOptions,
     *     AdvancedSecurityOptions?: Shapes\AdvancedSecurityOptionsInput,
     *     AutoTuneOptions?: Shapes\AutoTuneOptionsInput,
     *     TagList?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\CreateElasticsearchDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string|null $ElasticsearchVersion
 * @property Shapes\ElasticsearchClusterConfig|null $ElasticsearchClusterConfig
 * @property Shapes\EBSOptions|null $EBSOptions
 * @property string|null $AccessPolicies
 * @property Shapes\SnapshotOptions|null $SnapshotOptions
 * @property Shapes\VPCOptions|null $VPCOptions
 * @property Shapes\CognitoOptions|null $CognitoOptions
 * @property Shapes\EncryptionAtRestOptions|null $EncryptionAtRestOptions
 * @property Shapes\NodeToNodeEncryptionOptions|null $NodeToNodeEncryptionOptions
 * @property array<string, string>|null $AdvancedOptions
 * @property array<'INDEX_SLOW_LOGS'|'SEARCH_SLOW_LOGS'|'ES_APPLICATION_LOGS'|'AUDIT_LOGS', Shapes\LogPublishingOption>|null $LogPublishingOptions
 * @property Shapes\DomainEndpointOptions|null $DomainEndpointOptions
 * @property Shapes\AdvancedSecurityOptionsInput|null $AdvancedSecurityOptions
 * @property Shapes\AutoTuneOptionsInput|null $AutoTuneOptions
 * @property list<Shapes\Tag>|null $TagList
 */
class CreateElasticsearchDomainRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     ElasticsearchVersion?: string|null,
     *     ElasticsearchClusterConfig?: Shapes\ElasticsearchClusterConfig|null,
     *     EBSOptions?: Shapes\EBSOptions|null,
     *     AccessPolicies?: string|null,
     *     SnapshotOptions?: Shapes\SnapshotOptions|null,
     *     VPCOptions?: Shapes\VPCOptions|null,
     *     CognitoOptions?: Shapes\CognitoOptions|null,
     *     EncryptionAtRestOptions?: Shapes\EncryptionAtRestOptions|null,
     *     NodeToNodeEncryptionOptions?: Shapes\NodeToNodeEncryptionOptions|null,
     *     AdvancedOptions?: array<string, string>|null,
     *     LogPublishingOptions?: array<'INDEX_SLOW_LOGS'|'SEARCH_SLOW_LOGS'|'ES_APPLICATION_LOGS'|'AUDIT_LOGS', Shapes\LogPublishingOption>|null,
     *     DomainEndpointOptions?: Shapes\DomainEndpointOptions|null,
     *     AdvancedSecurityOptions?: Shapes\AdvancedSecurityOptionsInput|null,
     *     AutoTuneOptions?: Shapes\AutoTuneOptionsInput|null,
     *     TagList?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

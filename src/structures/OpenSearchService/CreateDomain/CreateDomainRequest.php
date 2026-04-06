<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\CreateDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string|null $EngineVersion
 * @property Shapes\ClusterConfig|null $ClusterConfig
 * @property Shapes\EBSOptions|null $EBSOptions
 * @property string|null $AccessPolicies
 * @property 'ipv4'|'dualstack'|null $IPAddressType
 * @property Shapes\SnapshotOptions|null $SnapshotOptions
 * @property Shapes\VPCOptions|null $VPCOptions
 * @property Shapes\CognitoOptions|null $CognitoOptions
 * @property Shapes\EncryptionAtRestOptions|null $EncryptionAtRestOptions
 * @property Shapes\NodeToNodeEncryptionOptions|null $NodeToNodeEncryptionOptions
 * @property array<string, string>|null $AdvancedOptions
 * @property array<'INDEX_SLOW_LOGS'|'SEARCH_SLOW_LOGS'|'ES_APPLICATION_LOGS'|'AUDIT_LOGS', Shapes\LogPublishingOption>|null $LogPublishingOptions
 * @property Shapes\DomainEndpointOptions|null $DomainEndpointOptions
 * @property Shapes\AdvancedSecurityOptionsInput|null $AdvancedSecurityOptions
 * @property Shapes\IdentityCenterOptionsInput|null $IdentityCenterOptions
 * @property list<Shapes\Tag>|null $TagList
 * @property Shapes\AutoTuneOptionsInput|null $AutoTuneOptions
 * @property Shapes\OffPeakWindowOptions|null $OffPeakWindowOptions
 * @property Shapes\SoftwareUpdateOptions|null $SoftwareUpdateOptions
 * @property Shapes\AIMLOptionsInput|null $AIMLOptions
 */
class CreateDomainRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     EngineVersion?: string|null,
     *     ClusterConfig?: Shapes\ClusterConfig|null,
     *     EBSOptions?: Shapes\EBSOptions|null,
     *     AccessPolicies?: string|null,
     *     IPAddressType?: 'ipv4'|'dualstack'|null,
     *     SnapshotOptions?: Shapes\SnapshotOptions|null,
     *     VPCOptions?: Shapes\VPCOptions|null,
     *     CognitoOptions?: Shapes\CognitoOptions|null,
     *     EncryptionAtRestOptions?: Shapes\EncryptionAtRestOptions|null,
     *     NodeToNodeEncryptionOptions?: Shapes\NodeToNodeEncryptionOptions|null,
     *     AdvancedOptions?: array<string, string>|null,
     *     LogPublishingOptions?: array<'INDEX_SLOW_LOGS'|'SEARCH_SLOW_LOGS'|'ES_APPLICATION_LOGS'|'AUDIT_LOGS', Shapes\LogPublishingOption>|null,
     *     DomainEndpointOptions?: Shapes\DomainEndpointOptions|null,
     *     AdvancedSecurityOptions?: Shapes\AdvancedSecurityOptionsInput|null,
     *     IdentityCenterOptions?: Shapes\IdentityCenterOptionsInput|null,
     *     TagList?: list<Shapes\Tag>|null,
     *     AutoTuneOptions?: Shapes\AutoTuneOptionsInput|null,
     *     OffPeakWindowOptions?: Shapes\OffPeakWindowOptions|null,
     *     SoftwareUpdateOptions?: Shapes\SoftwareUpdateOptions|null,
     *     AIMLOptions?: Shapes\AIMLOptionsInput|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\CreateDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $EngineVersion
 * @property Shapes\ClusterConfig $ClusterConfig
 * @property Shapes\EBSOptions $EBSOptions
 * @property string $AccessPolicies
 * @property 'ipv4'|'dualstack' $IPAddressType
 * @property Shapes\SnapshotOptions $SnapshotOptions
 * @property Shapes\VPCOptions $VPCOptions
 * @property Shapes\CognitoOptions $CognitoOptions
 * @property Shapes\EncryptionAtRestOptions $EncryptionAtRestOptions
 * @property Shapes\NodeToNodeEncryptionOptions $NodeToNodeEncryptionOptions
 * @property array<string, string> $AdvancedOptions
 * @property array<'INDEX_SLOW_LOGS'|'SEARCH_SLOW_LOGS'|'ES_APPLICATION_LOGS'|'AUDIT_LOGS', Shapes\LogPublishingOption> $LogPublishingOptions
 * @property Shapes\DomainEndpointOptions $DomainEndpointOptions
 * @property Shapes\AdvancedSecurityOptionsInput $AdvancedSecurityOptions
 * @property Shapes\IdentityCenterOptionsInput $IdentityCenterOptions
 * @property list<Shapes\Tag> $TagList
 * @property Shapes\AutoTuneOptionsInput $AutoTuneOptions
 * @property Shapes\OffPeakWindowOptions $OffPeakWindowOptions
 * @property Shapes\SoftwareUpdateOptions $SoftwareUpdateOptions
 * @property Shapes\AIMLOptionsInput $AIMLOptions
 */
class CreateDomainRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     EngineVersion?: string,
     *     ClusterConfig?: Shapes\ClusterConfig,
     *     EBSOptions?: Shapes\EBSOptions,
     *     AccessPolicies?: string,
     *     IPAddressType?: 'ipv4'|'dualstack',
     *     SnapshotOptions?: Shapes\SnapshotOptions,
     *     VPCOptions?: Shapes\VPCOptions,
     *     CognitoOptions?: Shapes\CognitoOptions,
     *     EncryptionAtRestOptions?: Shapes\EncryptionAtRestOptions,
     *     NodeToNodeEncryptionOptions?: Shapes\NodeToNodeEncryptionOptions,
     *     AdvancedOptions?: array<string, string>,
     *     LogPublishingOptions?: array<'INDEX_SLOW_LOGS'|'SEARCH_SLOW_LOGS'|'ES_APPLICATION_LOGS'|'AUDIT_LOGS', Shapes\LogPublishingOption>,
     *     DomainEndpointOptions?: Shapes\DomainEndpointOptions,
     *     AdvancedSecurityOptions?: Shapes\AdvancedSecurityOptionsInput,
     *     IdentityCenterOptions?: Shapes\IdentityCenterOptionsInput,
     *     TagList?: list<Shapes\Tag>,
     *     AutoTuneOptions?: Shapes\AutoTuneOptionsInput,
     *     OffPeakWindowOptions?: Shapes\OffPeakWindowOptions,
     *     SoftwareUpdateOptions?: Shapes\SoftwareUpdateOptions,
     *     AIMLOptions?: Shapes\AIMLOptionsInput
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

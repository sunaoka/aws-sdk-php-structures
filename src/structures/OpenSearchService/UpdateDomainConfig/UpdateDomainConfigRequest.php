<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\UpdateDomainConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property Shapes\ClusterConfig $ClusterConfig
 * @property Shapes\EBSOptions $EBSOptions
 * @property Shapes\SnapshotOptions $SnapshotOptions
 * @property Shapes\VPCOptions $VPCOptions
 * @property Shapes\CognitoOptions $CognitoOptions
 * @property array<string, string> $AdvancedOptions
 * @property string $AccessPolicies
 * @property 'ipv4'|'dualstack' $IPAddressType
 * @property array<'INDEX_SLOW_LOGS'|'SEARCH_SLOW_LOGS'|'ES_APPLICATION_LOGS'|'AUDIT_LOGS', Shapes\LogPublishingOption> $LogPublishingOptions
 * @property Shapes\EncryptionAtRestOptions $EncryptionAtRestOptions
 * @property Shapes\DomainEndpointOptions $DomainEndpointOptions
 * @property Shapes\NodeToNodeEncryptionOptions $NodeToNodeEncryptionOptions
 * @property Shapes\AdvancedSecurityOptionsInput $AdvancedSecurityOptions
 * @property Shapes\IdentityCenterOptionsInput $IdentityCenterOptions
 * @property Shapes\AutoTuneOptions $AutoTuneOptions
 * @property bool $DryRun
 * @property 'Basic'|'Verbose' $DryRunMode
 * @property Shapes\OffPeakWindowOptions $OffPeakWindowOptions
 * @property Shapes\SoftwareUpdateOptions $SoftwareUpdateOptions
 * @property Shapes\AIMLOptionsInput $AIMLOptions
 */
class UpdateDomainConfigRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     ClusterConfig?: Shapes\ClusterConfig,
     *     EBSOptions?: Shapes\EBSOptions,
     *     SnapshotOptions?: Shapes\SnapshotOptions,
     *     VPCOptions?: Shapes\VPCOptions,
     *     CognitoOptions?: Shapes\CognitoOptions,
     *     AdvancedOptions?: array<string, string>,
     *     AccessPolicies?: string,
     *     IPAddressType?: 'ipv4'|'dualstack',
     *     LogPublishingOptions?: array<'INDEX_SLOW_LOGS'|'SEARCH_SLOW_LOGS'|'ES_APPLICATION_LOGS'|'AUDIT_LOGS', Shapes\LogPublishingOption>,
     *     EncryptionAtRestOptions?: Shapes\EncryptionAtRestOptions,
     *     DomainEndpointOptions?: Shapes\DomainEndpointOptions,
     *     NodeToNodeEncryptionOptions?: Shapes\NodeToNodeEncryptionOptions,
     *     AdvancedSecurityOptions?: Shapes\AdvancedSecurityOptionsInput,
     *     IdentityCenterOptions?: Shapes\IdentityCenterOptionsInput,
     *     AutoTuneOptions?: Shapes\AutoTuneOptions,
     *     DryRun?: bool,
     *     DryRunMode?: 'Basic'|'Verbose',
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

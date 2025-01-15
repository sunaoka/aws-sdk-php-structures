<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\UpdateDomainConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property Shapes\ClusterConfig|null $ClusterConfig
 * @property Shapes\EBSOptions|null $EBSOptions
 * @property Shapes\SnapshotOptions|null $SnapshotOptions
 * @property Shapes\VPCOptions|null $VPCOptions
 * @property Shapes\CognitoOptions|null $CognitoOptions
 * @property array<string, string>|null $AdvancedOptions
 * @property string|null $AccessPolicies
 * @property 'ipv4'|'dualstack'|null $IPAddressType
 * @property array<'INDEX_SLOW_LOGS'|'SEARCH_SLOW_LOGS'|'ES_APPLICATION_LOGS'|'AUDIT_LOGS', Shapes\LogPublishingOption>|null $LogPublishingOptions
 * @property Shapes\EncryptionAtRestOptions|null $EncryptionAtRestOptions
 * @property Shapes\DomainEndpointOptions|null $DomainEndpointOptions
 * @property Shapes\NodeToNodeEncryptionOptions|null $NodeToNodeEncryptionOptions
 * @property Shapes\AdvancedSecurityOptionsInput|null $AdvancedSecurityOptions
 * @property Shapes\IdentityCenterOptionsInput|null $IdentityCenterOptions
 * @property Shapes\AutoTuneOptions|null $AutoTuneOptions
 * @property bool|null $DryRun
 * @property 'Basic'|'Verbose'|null $DryRunMode
 * @property Shapes\OffPeakWindowOptions|null $OffPeakWindowOptions
 * @property Shapes\SoftwareUpdateOptions|null $SoftwareUpdateOptions
 * @property Shapes\AIMLOptionsInput|null $AIMLOptions
 */
class UpdateDomainConfigRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     ClusterConfig?: Shapes\ClusterConfig|null,
     *     EBSOptions?: Shapes\EBSOptions|null,
     *     SnapshotOptions?: Shapes\SnapshotOptions|null,
     *     VPCOptions?: Shapes\VPCOptions|null,
     *     CognitoOptions?: Shapes\CognitoOptions|null,
     *     AdvancedOptions?: array<string, string>|null,
     *     AccessPolicies?: string|null,
     *     IPAddressType?: 'ipv4'|'dualstack'|null,
     *     LogPublishingOptions?: array<'INDEX_SLOW_LOGS'|'SEARCH_SLOW_LOGS'|'ES_APPLICATION_LOGS'|'AUDIT_LOGS', Shapes\LogPublishingOption>|null,
     *     EncryptionAtRestOptions?: Shapes\EncryptionAtRestOptions|null,
     *     DomainEndpointOptions?: Shapes\DomainEndpointOptions|null,
     *     NodeToNodeEncryptionOptions?: Shapes\NodeToNodeEncryptionOptions|null,
     *     AdvancedSecurityOptions?: Shapes\AdvancedSecurityOptionsInput|null,
     *     IdentityCenterOptions?: Shapes\IdentityCenterOptionsInput|null,
     *     AutoTuneOptions?: Shapes\AutoTuneOptions|null,
     *     DryRun?: bool|null,
     *     DryRunMode?: 'Basic'|'Verbose'|null,
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

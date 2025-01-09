<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\UpdateElasticsearchDomainConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ElasticsearchVersionStatus $ElasticsearchVersion
 * @property ElasticsearchClusterConfigStatus $ElasticsearchClusterConfig
 * @property EBSOptionsStatus $EBSOptions
 * @property AccessPoliciesStatus $AccessPolicies
 * @property SnapshotOptionsStatus $SnapshotOptions
 * @property VPCDerivedInfoStatus $VPCOptions
 * @property CognitoOptionsStatus $CognitoOptions
 * @property EncryptionAtRestOptionsStatus $EncryptionAtRestOptions
 * @property NodeToNodeEncryptionOptionsStatus $NodeToNodeEncryptionOptions
 * @property AdvancedOptionsStatus $AdvancedOptions
 * @property LogPublishingOptionsStatus $LogPublishingOptions
 * @property DomainEndpointOptionsStatus $DomainEndpointOptions
 * @property AdvancedSecurityOptionsStatus $AdvancedSecurityOptions
 * @property AutoTuneOptionsStatus $AutoTuneOptions
 * @property ChangeProgressDetails $ChangeProgressDetails
 * @property list<ModifyingProperties> $ModifyingProperties
 */
class ElasticsearchDomainConfig extends Shape
{
    /**
     * @param array{
     *     ElasticsearchVersion?: ElasticsearchVersionStatus,
     *     ElasticsearchClusterConfig?: ElasticsearchClusterConfigStatus,
     *     EBSOptions?: EBSOptionsStatus,
     *     AccessPolicies?: AccessPoliciesStatus,
     *     SnapshotOptions?: SnapshotOptionsStatus,
     *     VPCOptions?: VPCDerivedInfoStatus,
     *     CognitoOptions?: CognitoOptionsStatus,
     *     EncryptionAtRestOptions?: EncryptionAtRestOptionsStatus,
     *     NodeToNodeEncryptionOptions?: NodeToNodeEncryptionOptionsStatus,
     *     AdvancedOptions?: AdvancedOptionsStatus,
     *     LogPublishingOptions?: LogPublishingOptionsStatus,
     *     DomainEndpointOptions?: DomainEndpointOptionsStatus,
     *     AdvancedSecurityOptions?: AdvancedSecurityOptionsStatus,
     *     AutoTuneOptions?: AutoTuneOptionsStatus,
     *     ChangeProgressDetails?: ChangeProgressDetails,
     *     ModifyingProperties?: list<ModifyingProperties>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

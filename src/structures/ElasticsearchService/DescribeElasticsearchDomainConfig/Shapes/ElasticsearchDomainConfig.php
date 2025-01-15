<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DescribeElasticsearchDomainConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ElasticsearchVersionStatus|null $ElasticsearchVersion
 * @property ElasticsearchClusterConfigStatus|null $ElasticsearchClusterConfig
 * @property EBSOptionsStatus|null $EBSOptions
 * @property AccessPoliciesStatus|null $AccessPolicies
 * @property SnapshotOptionsStatus|null $SnapshotOptions
 * @property VPCDerivedInfoStatus|null $VPCOptions
 * @property CognitoOptionsStatus|null $CognitoOptions
 * @property EncryptionAtRestOptionsStatus|null $EncryptionAtRestOptions
 * @property NodeToNodeEncryptionOptionsStatus|null $NodeToNodeEncryptionOptions
 * @property AdvancedOptionsStatus|null $AdvancedOptions
 * @property LogPublishingOptionsStatus|null $LogPublishingOptions
 * @property DomainEndpointOptionsStatus|null $DomainEndpointOptions
 * @property AdvancedSecurityOptionsStatus|null $AdvancedSecurityOptions
 * @property AutoTuneOptionsStatus|null $AutoTuneOptions
 * @property ChangeProgressDetails|null $ChangeProgressDetails
 * @property list<ModifyingProperties>|null $ModifyingProperties
 */
class ElasticsearchDomainConfig extends Shape
{
    /**
     * @param array{
     *     ElasticsearchVersion?: ElasticsearchVersionStatus|null,
     *     ElasticsearchClusterConfig?: ElasticsearchClusterConfigStatus|null,
     *     EBSOptions?: EBSOptionsStatus|null,
     *     AccessPolicies?: AccessPoliciesStatus|null,
     *     SnapshotOptions?: SnapshotOptionsStatus|null,
     *     VPCOptions?: VPCDerivedInfoStatus|null,
     *     CognitoOptions?: CognitoOptionsStatus|null,
     *     EncryptionAtRestOptions?: EncryptionAtRestOptionsStatus|null,
     *     NodeToNodeEncryptionOptions?: NodeToNodeEncryptionOptionsStatus|null,
     *     AdvancedOptions?: AdvancedOptionsStatus|null,
     *     LogPublishingOptions?: LogPublishingOptionsStatus|null,
     *     DomainEndpointOptions?: DomainEndpointOptionsStatus|null,
     *     AdvancedSecurityOptions?: AdvancedSecurityOptionsStatus|null,
     *     AutoTuneOptions?: AutoTuneOptionsStatus|null,
     *     ChangeProgressDetails?: ChangeProgressDetails|null,
     *     ModifyingProperties?: list<ModifyingProperties>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

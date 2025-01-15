<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccessPolicies
 * @property AwsElasticsearchDomainDomainEndpointOptions|null $DomainEndpointOptions
 * @property string|null $DomainId
 * @property string|null $DomainName
 * @property string|null $Endpoint
 * @property array<string, string>|null $Endpoints
 * @property string|null $ElasticsearchVersion
 * @property AwsElasticsearchDomainElasticsearchClusterConfigDetails|null $ElasticsearchClusterConfig
 * @property AwsElasticsearchDomainEncryptionAtRestOptions|null $EncryptionAtRestOptions
 * @property AwsElasticsearchDomainLogPublishingOptions|null $LogPublishingOptions
 * @property AwsElasticsearchDomainNodeToNodeEncryptionOptions|null $NodeToNodeEncryptionOptions
 * @property AwsElasticsearchDomainServiceSoftwareOptions|null $ServiceSoftwareOptions
 * @property AwsElasticsearchDomainVPCOptions|null $VPCOptions
 */
class AwsElasticsearchDomainDetails extends Shape
{
    /**
     * @param array{
     *     AccessPolicies?: string|null,
     *     DomainEndpointOptions?: AwsElasticsearchDomainDomainEndpointOptions|null,
     *     DomainId?: string|null,
     *     DomainName?: string|null,
     *     Endpoint?: string|null,
     *     Endpoints?: array<string, string>|null,
     *     ElasticsearchVersion?: string|null,
     *     ElasticsearchClusterConfig?: AwsElasticsearchDomainElasticsearchClusterConfigDetails|null,
     *     EncryptionAtRestOptions?: AwsElasticsearchDomainEncryptionAtRestOptions|null,
     *     LogPublishingOptions?: AwsElasticsearchDomainLogPublishingOptions|null,
     *     NodeToNodeEncryptionOptions?: AwsElasticsearchDomainNodeToNodeEncryptionOptions|null,
     *     ServiceSoftwareOptions?: AwsElasticsearchDomainServiceSoftwareOptions|null,
     *     VPCOptions?: AwsElasticsearchDomainVPCOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccessPolicies
 * @property AwsElasticsearchDomainDomainEndpointOptions $DomainEndpointOptions
 * @property string $DomainId
 * @property string $DomainName
 * @property string $Endpoint
 * @property array<string, string> $Endpoints
 * @property string $ElasticsearchVersion
 * @property AwsElasticsearchDomainElasticsearchClusterConfigDetails $ElasticsearchClusterConfig
 * @property AwsElasticsearchDomainEncryptionAtRestOptions $EncryptionAtRestOptions
 * @property AwsElasticsearchDomainLogPublishingOptions $LogPublishingOptions
 * @property AwsElasticsearchDomainNodeToNodeEncryptionOptions $NodeToNodeEncryptionOptions
 * @property AwsElasticsearchDomainServiceSoftwareOptions $ServiceSoftwareOptions
 * @property AwsElasticsearchDomainVPCOptions $VPCOptions
 */
class AwsElasticsearchDomainDetails extends Shape
{
    /**
     * @param array{
     *     AccessPolicies?: string,
     *     DomainEndpointOptions?: AwsElasticsearchDomainDomainEndpointOptions,
     *     DomainId?: string,
     *     DomainName?: string,
     *     Endpoint?: string,
     *     Endpoints?: array<string, string>,
     *     ElasticsearchVersion?: string,
     *     ElasticsearchClusterConfig?: AwsElasticsearchDomainElasticsearchClusterConfigDetails,
     *     EncryptionAtRestOptions?: AwsElasticsearchDomainEncryptionAtRestOptions,
     *     LogPublishingOptions?: AwsElasticsearchDomainLogPublishingOptions,
     *     NodeToNodeEncryptionOptions?: AwsElasticsearchDomainNodeToNodeEncryptionOptions,
     *     ServiceSoftwareOptions?: AwsElasticsearchDomainServiceSoftwareOptions,
     *     VPCOptions?: AwsElasticsearchDomainVPCOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $AccessPolicies
 * @property string|null $DomainName
 * @property string|null $Id
 * @property string|null $DomainEndpoint
 * @property string|null $EngineVersion
 * @property AwsOpenSearchServiceDomainEncryptionAtRestOptionsDetails|null $EncryptionAtRestOptions
 * @property AwsOpenSearchServiceDomainNodeToNodeEncryptionOptionsDetails|null $NodeToNodeEncryptionOptions
 * @property AwsOpenSearchServiceDomainServiceSoftwareOptionsDetails|null $ServiceSoftwareOptions
 * @property AwsOpenSearchServiceDomainClusterConfigDetails|null $ClusterConfig
 * @property AwsOpenSearchServiceDomainDomainEndpointOptionsDetails|null $DomainEndpointOptions
 * @property AwsOpenSearchServiceDomainVpcOptionsDetails|null $VpcOptions
 * @property AwsOpenSearchServiceDomainLogPublishingOptionsDetails|null $LogPublishingOptions
 * @property array<string, string>|null $DomainEndpoints
 * @property AwsOpenSearchServiceDomainAdvancedSecurityOptionsDetails|null $AdvancedSecurityOptions
 */
class AwsOpenSearchServiceDomainDetails extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     AccessPolicies?: string|null,
     *     DomainName?: string|null,
     *     Id?: string|null,
     *     DomainEndpoint?: string|null,
     *     EngineVersion?: string|null,
     *     EncryptionAtRestOptions?: AwsOpenSearchServiceDomainEncryptionAtRestOptionsDetails|null,
     *     NodeToNodeEncryptionOptions?: AwsOpenSearchServiceDomainNodeToNodeEncryptionOptionsDetails|null,
     *     ServiceSoftwareOptions?: AwsOpenSearchServiceDomainServiceSoftwareOptionsDetails|null,
     *     ClusterConfig?: AwsOpenSearchServiceDomainClusterConfigDetails|null,
     *     DomainEndpointOptions?: AwsOpenSearchServiceDomainDomainEndpointOptionsDetails|null,
     *     VpcOptions?: AwsOpenSearchServiceDomainVpcOptionsDetails|null,
     *     LogPublishingOptions?: AwsOpenSearchServiceDomainLogPublishingOptionsDetails|null,
     *     DomainEndpoints?: array<string, string>|null,
     *     AdvancedSecurityOptions?: AwsOpenSearchServiceDomainAdvancedSecurityOptionsDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

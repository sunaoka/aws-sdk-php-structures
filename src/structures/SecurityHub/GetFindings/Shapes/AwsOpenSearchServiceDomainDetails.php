<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $AccessPolicies
 * @property string $DomainName
 * @property string $Id
 * @property string $DomainEndpoint
 * @property string $EngineVersion
 * @property AwsOpenSearchServiceDomainEncryptionAtRestOptionsDetails $EncryptionAtRestOptions
 * @property AwsOpenSearchServiceDomainNodeToNodeEncryptionOptionsDetails $NodeToNodeEncryptionOptions
 * @property AwsOpenSearchServiceDomainServiceSoftwareOptionsDetails $ServiceSoftwareOptions
 * @property AwsOpenSearchServiceDomainClusterConfigDetails $ClusterConfig
 * @property AwsOpenSearchServiceDomainDomainEndpointOptionsDetails $DomainEndpointOptions
 * @property AwsOpenSearchServiceDomainVpcOptionsDetails $VpcOptions
 * @property AwsOpenSearchServiceDomainLogPublishingOptionsDetails $LogPublishingOptions
 * @property array<string, string> $DomainEndpoints
 * @property AwsOpenSearchServiceDomainAdvancedSecurityOptionsDetails $AdvancedSecurityOptions
 */
class AwsOpenSearchServiceDomainDetails extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     AccessPolicies?: string,
     *     DomainName?: string,
     *     Id?: string,
     *     DomainEndpoint?: string,
     *     EngineVersion?: string,
     *     EncryptionAtRestOptions?: AwsOpenSearchServiceDomainEncryptionAtRestOptionsDetails,
     *     NodeToNodeEncryptionOptions?: AwsOpenSearchServiceDomainNodeToNodeEncryptionOptionsDetails,
     *     ServiceSoftwareOptions?: AwsOpenSearchServiceDomainServiceSoftwareOptionsDetails,
     *     ClusterConfig?: AwsOpenSearchServiceDomainClusterConfigDetails,
     *     DomainEndpointOptions?: AwsOpenSearchServiceDomainDomainEndpointOptionsDetails,
     *     VpcOptions?: AwsOpenSearchServiceDomainVpcOptionsDetails,
     *     LogPublishingOptions?: AwsOpenSearchServiceDomainLogPublishingOptionsDetails,
     *     DomainEndpoints?: array<string, string>,
     *     AdvancedSecurityOptions?: AwsOpenSearchServiceDomainAdvancedSecurityOptionsDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

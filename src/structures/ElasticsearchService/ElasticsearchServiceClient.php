<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService;

class ElasticsearchServiceClient extends \Aws\ElasticsearchService\ElasticsearchServiceClient
{
    use AcceptInboundCrossClusterSearchConnection\AcceptInboundCrossClusterSearchConnectionTrait;
    use AddTags\AddTagsTrait;
    use AssociatePackage\AssociatePackageTrait;
    use AuthorizeVpcEndpointAccess\AuthorizeVpcEndpointAccessTrait;
    use CancelDomainConfigChange\CancelDomainConfigChangeTrait;
    use CancelElasticsearchServiceSoftwareUpdate\CancelElasticsearchServiceSoftwareUpdateTrait;
    use CreateElasticsearchDomain\CreateElasticsearchDomainTrait;
    use CreateOutboundCrossClusterSearchConnection\CreateOutboundCrossClusterSearchConnectionTrait;
    use CreatePackage\CreatePackageTrait;
    use CreateVpcEndpoint\CreateVpcEndpointTrait;
    use DeleteElasticsearchDomain\DeleteElasticsearchDomainTrait;
    use DeleteElasticsearchServiceRole\DeleteElasticsearchServiceRoleTrait;
    use DeleteInboundCrossClusterSearchConnection\DeleteInboundCrossClusterSearchConnectionTrait;
    use DeleteOutboundCrossClusterSearchConnection\DeleteOutboundCrossClusterSearchConnectionTrait;
    use DeletePackage\DeletePackageTrait;
    use DeleteVpcEndpoint\DeleteVpcEndpointTrait;
    use DescribeDomainAutoTunes\DescribeDomainAutoTunesTrait;
    use DescribeDomainChangeProgress\DescribeDomainChangeProgressTrait;
    use DescribeElasticsearchDomain\DescribeElasticsearchDomainTrait;
    use DescribeElasticsearchDomainConfig\DescribeElasticsearchDomainConfigTrait;
    use DescribeElasticsearchDomains\DescribeElasticsearchDomainsTrait;
    use DescribeElasticsearchInstanceTypeLimits\DescribeElasticsearchInstanceTypeLimitsTrait;
    use DescribeInboundCrossClusterSearchConnections\DescribeInboundCrossClusterSearchConnectionsTrait;
    use DescribeOutboundCrossClusterSearchConnections\DescribeOutboundCrossClusterSearchConnectionsTrait;
    use DescribePackages\DescribePackagesTrait;
    use DescribeReservedElasticsearchInstanceOfferings\DescribeReservedElasticsearchInstanceOfferingsTrait;
    use DescribeReservedElasticsearchInstances\DescribeReservedElasticsearchInstancesTrait;
    use DescribeVpcEndpoints\DescribeVpcEndpointsTrait;
    use DissociatePackage\DissociatePackageTrait;
    use GetCompatibleElasticsearchVersions\GetCompatibleElasticsearchVersionsTrait;
    use GetPackageVersionHistory\GetPackageVersionHistoryTrait;
    use GetUpgradeHistory\GetUpgradeHistoryTrait;
    use GetUpgradeStatus\GetUpgradeStatusTrait;
    use ListDomainNames\ListDomainNamesTrait;
    use ListDomainsForPackage\ListDomainsForPackageTrait;
    use ListElasticsearchInstanceTypes\ListElasticsearchInstanceTypesTrait;
    use ListElasticsearchVersions\ListElasticsearchVersionsTrait;
    use ListPackagesForDomain\ListPackagesForDomainTrait;
    use ListTags\ListTagsTrait;
    use ListVpcEndpointAccess\ListVpcEndpointAccessTrait;
    use ListVpcEndpoints\ListVpcEndpointsTrait;
    use ListVpcEndpointsForDomain\ListVpcEndpointsForDomainTrait;
    use PurchaseReservedElasticsearchInstanceOffering\PurchaseReservedElasticsearchInstanceOfferingTrait;
    use RejectInboundCrossClusterSearchConnection\RejectInboundCrossClusterSearchConnectionTrait;
    use RemoveTags\RemoveTagsTrait;
    use RevokeVpcEndpointAccess\RevokeVpcEndpointAccessTrait;
    use StartElasticsearchServiceSoftwareUpdate\StartElasticsearchServiceSoftwareUpdateTrait;
    use UpdateElasticsearchDomainConfig\UpdateElasticsearchDomainConfigTrait;
    use UpdatePackage\UpdatePackageTrait;
    use UpdateVpcEndpoint\UpdateVpcEndpointTrait;
    use UpgradeElasticsearchDomain\UpgradeElasticsearchDomainTrait;
}

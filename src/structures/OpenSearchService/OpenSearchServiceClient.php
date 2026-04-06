<?php

namespace Sunaoka\Aws\Structures\OpenSearchService;

class OpenSearchServiceClient extends \Aws\OpenSearchService\OpenSearchServiceClient
{
    use AcceptInboundConnection\AcceptInboundConnectionTrait;
    use AddTags\AddTagsTrait;
    use AssociatePackage\AssociatePackageTrait;
    use AuthorizeVpcEndpointAccess\AuthorizeVpcEndpointAccessTrait;
    use CancelServiceSoftwareUpdate\CancelServiceSoftwareUpdateTrait;
    use CreateDomain\CreateDomainTrait;
    use CreateOutboundConnection\CreateOutboundConnectionTrait;
    use CreatePackage\CreatePackageTrait;
    use CreateVpcEndpoint\CreateVpcEndpointTrait;
    use DeleteDomain\DeleteDomainTrait;
    use DeleteInboundConnection\DeleteInboundConnectionTrait;
    use DeleteOutboundConnection\DeleteOutboundConnectionTrait;
    use DeletePackage\DeletePackageTrait;
    use DeleteVpcEndpoint\DeleteVpcEndpointTrait;
    use DescribeDomain\DescribeDomainTrait;
    use DescribeDomainAutoTunes\DescribeDomainAutoTunesTrait;
    use DescribeDomainChangeProgress\DescribeDomainChangeProgressTrait;
    use DescribeDomainConfig\DescribeDomainConfigTrait;
    use DescribeDomainHealth\DescribeDomainHealthTrait;
    use DescribeDomainNodes\DescribeDomainNodesTrait;
    use DescribeDomains\DescribeDomainsTrait;
    use DescribeDryRunProgress\DescribeDryRunProgressTrait;
    use DescribeInboundConnections\DescribeInboundConnectionsTrait;
    use DescribeInstanceTypeLimits\DescribeInstanceTypeLimitsTrait;
    use DescribeOutboundConnections\DescribeOutboundConnectionsTrait;
    use DescribePackages\DescribePackagesTrait;
    use DescribeReservedInstanceOfferings\DescribeReservedInstanceOfferingsTrait;
    use DescribeReservedInstances\DescribeReservedInstancesTrait;
    use DescribeVpcEndpoints\DescribeVpcEndpointsTrait;
    use DissociatePackage\DissociatePackageTrait;
    use GetCompatibleVersions\GetCompatibleVersionsTrait;
    use GetPackageVersionHistory\GetPackageVersionHistoryTrait;
    use GetUpgradeHistory\GetUpgradeHistoryTrait;
    use GetUpgradeStatus\GetUpgradeStatusTrait;
    use ListDomainNames\ListDomainNamesTrait;
    use ListDomainsForPackage\ListDomainsForPackageTrait;
    use ListInstanceTypeDetails\ListInstanceTypeDetailsTrait;
    use ListPackagesForDomain\ListPackagesForDomainTrait;
    use ListScheduledActions\ListScheduledActionsTrait;
    use ListTags\ListTagsTrait;
    use ListVersions\ListVersionsTrait;
    use ListVpcEndpointAccess\ListVpcEndpointAccessTrait;
    use ListVpcEndpoints\ListVpcEndpointsTrait;
    use ListVpcEndpointsForDomain\ListVpcEndpointsForDomainTrait;
    use PurchaseReservedInstanceOffering\PurchaseReservedInstanceOfferingTrait;
    use RejectInboundConnection\RejectInboundConnectionTrait;
    use RemoveTags\RemoveTagsTrait;
    use RevokeVpcEndpointAccess\RevokeVpcEndpointAccessTrait;
    use StartServiceSoftwareUpdate\StartServiceSoftwareUpdateTrait;
    use UpdateDomainConfig\UpdateDomainConfigTrait;
    use UpdatePackage\UpdatePackageTrait;
    use UpdateScheduledAction\UpdateScheduledActionTrait;
    use UpdateVpcEndpoint\UpdateVpcEndpointTrait;
    use UpgradeDomain\UpgradeDomainTrait;
}

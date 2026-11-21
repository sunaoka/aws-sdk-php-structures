<?php

namespace Sunaoka\Aws\Structures\APIPortal;

class APIPortalClient extends \Aws\APIPortal\APIPortalClient
{
    use AssociateManagedApis\AssociateManagedApisTrait;
    use CreateManagedApi\CreateManagedApiTrait;
    use CreatePortal\CreatePortalTrait;
    use CreatePortalPreview\CreatePortalPreviewTrait;
    use CreateProduct\CreateProductTrait;
    use CreateProductApiPage\CreateProductApiPageTrait;
    use CreateProductPage\CreateProductPageTrait;
    use DeleteDiscoveryConfiguration\DeleteDiscoveryConfigurationTrait;
    use DeleteManagedApi\DeleteManagedApiTrait;
    use DeleteOrganizationDiscoveryConfiguration\DeleteOrganizationDiscoveryConfigurationTrait;
    use DeletePortal\DeletePortalTrait;
    use DeleteProduct\DeleteProductTrait;
    use DeleteProductApiPage\DeleteProductApiPageTrait;
    use DeleteProductPage\DeleteProductPageTrait;
    use DeleteProductSharingPolicy\DeleteProductSharingPolicyTrait;
    use DisassociateManagedApis\DisassociateManagedApisTrait;
    use GetApiInventoryItem\GetApiInventoryItemTrait;
    use GetDiscoveryConfiguration\GetDiscoveryConfigurationTrait;
    use GetManagedApi\GetManagedApiTrait;
    use GetOrganizationDiscoveryConfiguration\GetOrganizationDiscoveryConfigurationTrait;
    use GetPortal\GetPortalTrait;
    use GetProduct\GetProductTrait;
    use GetProductApiPage\GetProductApiPageTrait;
    use GetProductPage\GetProductPageTrait;
    use GetProductSharingPolicy\GetProductSharingPolicyTrait;
    use ListApiInventoryItems\ListApiInventoryItemsTrait;
    use ListDiscoveryStatuses\ListDiscoveryStatusesTrait;
    use ListManagedApiEvents\ListManagedApiEventsTrait;
    use ListManagedApis\ListManagedApisTrait;
    use ListPortals\ListPortalsTrait;
    use ListProductApiPages\ListProductApiPagesTrait;
    use ListProductPages\ListProductPagesTrait;
    use ListProducts\ListProductsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PutDiscoveryConfiguration\PutDiscoveryConfigurationTrait;
    use PutOrganizationDiscoveryConfiguration\PutOrganizationDiscoveryConfigurationTrait;
    use PutProductSharingPolicy\PutProductSharingPolicyTrait;
    use StartDiscovery\StartDiscoveryTrait;
    use StopDiscovery\StopDiscoveryTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdatePortal\UpdatePortalTrait;
    use UpdatePortalPublishStatus\UpdatePortalPublishStatusTrait;
    use UpdateProduct\UpdateProductTrait;
    use UpdateProductApiPage\UpdateProductApiPageTrait;
    use UpdateProductPage\UpdateProductPageTrait;
}

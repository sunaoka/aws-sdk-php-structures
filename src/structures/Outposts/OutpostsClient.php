<?php

namespace Sunaoka\Aws\Structures\Outposts;

class OutpostsClient extends \Aws\Outposts\OutpostsClient
{
    use CancelCapacityTask\CancelCapacityTaskTrait;
    use CancelOrder\CancelOrderTrait;
    use CreateOrder\CreateOrderTrait;
    use CreateOutpost\CreateOutpostTrait;
    use CreateSite\CreateSiteTrait;
    use DeleteOutpost\DeleteOutpostTrait;
    use DeleteSite\DeleteSiteTrait;
    use GetCapacityTask\GetCapacityTaskTrait;
    use GetCatalogItem\GetCatalogItemTrait;
    use GetConnection\GetConnectionTrait;
    use GetOrder\GetOrderTrait;
    use GetOutpost\GetOutpostTrait;
    use GetOutpostBillingInformation\GetOutpostBillingInformationTrait;
    use GetOutpostInstanceTypes\GetOutpostInstanceTypesTrait;
    use GetOutpostSupportedInstanceTypes\GetOutpostSupportedInstanceTypesTrait;
    use GetSite\GetSiteTrait;
    use GetSiteAddress\GetSiteAddressTrait;
    use ListAssetInstances\ListAssetInstancesTrait;
    use ListAssets\ListAssetsTrait;
    use ListBlockingInstancesForCapacityTask\ListBlockingInstancesForCapacityTaskTrait;
    use ListCapacityTasks\ListCapacityTasksTrait;
    use ListCatalogItems\ListCatalogItemsTrait;
    use ListOrders\ListOrdersTrait;
    use ListOutposts\ListOutpostsTrait;
    use ListSites\ListSitesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use StartCapacityTask\StartCapacityTaskTrait;
    use StartConnection\StartConnectionTrait;
    use StartOutpostDecommission\StartOutpostDecommissionTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateOutpost\UpdateOutpostTrait;
    use UpdateSite\UpdateSiteTrait;
    use UpdateSiteAddress\UpdateSiteAddressTrait;
    use UpdateSiteRackPhysicalProperties\UpdateSiteRackPhysicalPropertiesTrait;
}

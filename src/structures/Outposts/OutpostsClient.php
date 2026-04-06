<?php

namespace Sunaoka\Aws\Structures\Outposts;

class OutpostsClient extends \Aws\Outposts\OutpostsClient
{
    use CancelOrder\CancelOrderTrait;
    use CreateOrder\CreateOrderTrait;
    use CreateOutpost\CreateOutpostTrait;
    use CreateSite\CreateSiteTrait;
    use DeleteOutpost\DeleteOutpostTrait;
    use DeleteSite\DeleteSiteTrait;
    use GetCatalogItem\GetCatalogItemTrait;
    use GetConnection\GetConnectionTrait;
    use GetOrder\GetOrderTrait;
    use GetOutpost\GetOutpostTrait;
    use GetOutpostInstanceTypes\GetOutpostInstanceTypesTrait;
    use GetSite\GetSiteTrait;
    use GetSiteAddress\GetSiteAddressTrait;
    use ListAssets\ListAssetsTrait;
    use ListCatalogItems\ListCatalogItemsTrait;
    use ListOrders\ListOrdersTrait;
    use ListOutposts\ListOutpostsTrait;
    use ListSites\ListSitesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use StartConnection\StartConnectionTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateOutpost\UpdateOutpostTrait;
    use UpdateSite\UpdateSiteTrait;
    use UpdateSiteAddress\UpdateSiteAddressTrait;
    use UpdateSiteRackPhysicalProperties\UpdateSiteRackPhysicalPropertiesTrait;
}

<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\GetProduct;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $productId
 * @property string $catalog
 * @property string $productName
 * @property 'DEPLOYED'|'NOT_DEPLOYED'|'NOT_APPLICABLE' $deployedOnAws
 * @property string $shortDescription
 * @property string $longDescription
 * @property Shapes\SellerInformation $manufacturer
 * @property string $logoThumbnailUrl
 * @property list<Shapes\FulfillmentOptionSummary> $fulfillmentOptionSummaries
 * @property list<Shapes\Category> $categories
 * @property list<string> $highlights
 * @property list<Shapes\PromotionalMedia> $promotionalMedia
 * @property list<Shapes\ResourceShape> $resources
 * @property list<Shapes\SellerEngagement> $sellerEngagements
 */
class GetProductResponse extends Response
{
}

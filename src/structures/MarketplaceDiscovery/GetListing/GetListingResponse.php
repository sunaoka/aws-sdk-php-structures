<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\GetListing;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\ListingAssociatedEntity> $associatedEntities
 * @property list<Shapes\ListingBadge> $badges
 * @property string $catalog
 * @property list<Shapes\Category> $categories
 * @property list<Shapes\FulfillmentOptionSummary> $fulfillmentOptionSummaries
 * @property list<string> $highlights
 * @property string|null $integrationGuide
 * @property string $listingId
 * @property string $listingName
 * @property string $logoThumbnailUrl
 * @property string $longDescription
 * @property list<Shapes\PricingModel> $pricingModels
 * @property list<Shapes\PricingUnit> $pricingUnits
 * @property list<Shapes\PromotionalMedia> $promotionalMedia
 * @property Shapes\SellerInformation $publisher
 * @property list<Shapes\ResourceShape> $resources
 * @property Shapes\ReviewSummary|null $reviewSummary
 * @property list<Shapes\SellerEngagement> $sellerEngagements
 * @property string $shortDescription
 * @property list<Shapes\UseCaseEntry> $useCases
 */
class GetListingResponse extends Response
{
}

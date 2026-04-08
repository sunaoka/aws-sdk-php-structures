<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\SearchListings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $listingId
 * @property string $listingName
 * @property SellerInformation $publisher
 * @property string $catalog
 * @property string $shortDescription
 * @property string $logoThumbnailUrl
 * @property list<Category> $categories
 * @property list<FulfillmentOptionSummary> $fulfillmentOptionSummaries
 * @property list<ListingBadge> $badges
 * @property ReviewSummary $reviewSummary
 * @property list<PricingModel> $pricingModels
 * @property list<PricingUnit> $pricingUnits
 * @property list<ListingSummaryAssociatedEntity> $associatedEntities
 */
class ListingSummary extends Shape
{
    /**
     * @param array{
     *     listingId: string,
     *     listingName: string,
     *     publisher: SellerInformation,
     *     catalog: string,
     *     shortDescription: string,
     *     logoThumbnailUrl: string,
     *     categories: list<Category>,
     *     fulfillmentOptionSummaries: list<FulfillmentOptionSummary>,
     *     badges: list<ListingBadge>,
     *     reviewSummary: ReviewSummary,
     *     pricingModels: list<PricingModel>,
     *     pricingUnits: list<PricingUnit>,
     *     associatedEntities: list<ListingSummaryAssociatedEntity>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

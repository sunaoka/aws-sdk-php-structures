<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\SearchListings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $listingId
 * @property string $listingName
 * @property SellerInformation $publisher
 * @property list<FulfillmentOptionSummary> $fulfillmentOptionSummaries
 * @property string $catalog
 * @property string $shortDescription
 * @property string $logoThumbnailUrl
 * @property list<Category> $categories
 * @property list<ListingBadge> $badges
 * @property ReviewSummary $reviewSummary
 * @property list<PricingModel> $pricingModels
 * @property list<PricingUnit> $pricingUnits
 * @property list<ListingSummaryAssociatedEntity> $associatedEntities
 * @property TrustCenterSummary|null $trustCenterSummary
 * @property CaseStudiesSummary|null $caseStudiesSummary
 * @property UseCaseSummary|null $useCaseSummary
 * @property list<SellerEngagement>|null $sellerEngagements
 */
class ListingSummary extends Shape
{
    /**
     * @param array{
     *     listingId: string,
     *     listingName: string,
     *     publisher: SellerInformation,
     *     fulfillmentOptionSummaries: list<FulfillmentOptionSummary>,
     *     catalog: string,
     *     shortDescription: string,
     *     logoThumbnailUrl: string,
     *     categories: list<Category>,
     *     badges: list<ListingBadge>,
     *     reviewSummary: ReviewSummary,
     *     pricingModels: list<PricingModel>,
     *     pricingUnits: list<PricingUnit>,
     *     associatedEntities: list<ListingSummaryAssociatedEntity>,
     *     trustCenterSummary?: TrustCenterSummary|null,
     *     caseStudiesSummary?: CaseStudiesSummary|null,
     *     useCaseSummary?: UseCaseSummary|null,
     *     sellerEngagements?: list<SellerEngagement>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

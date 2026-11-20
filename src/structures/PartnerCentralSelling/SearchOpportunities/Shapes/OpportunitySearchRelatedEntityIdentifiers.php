<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\SearchOpportunities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $AwsMarketplaceOffers
 * @property list<string>|null $AwsMarketplaceOfferSets
 * @property list<string>|null $AwsMarketplaceSolutions
 * @property list<string>|null $Solutions
 */
class OpportunitySearchRelatedEntityIdentifiers extends Shape
{
    /**
     * @param array{
     *     AwsMarketplaceOffers?: list<string>|null,
     *     AwsMarketplaceOfferSets?: list<string>|null,
     *     AwsMarketplaceSolutions?: list<string>|null,
     *     Solutions?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

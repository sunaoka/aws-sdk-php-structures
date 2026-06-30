<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetOpportunity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $AwsMarketplaceOffers
 * @property list<string>|null $AwsMarketplaceOfferSets
 * @property list<string>|null $Solutions
 * @property list<string>|null $AwsProducts
 * @property list<string>|null $AwsMarketplaceSolutions
 * @property list<string>|null $AwsMarketplaceProducts
 */
class RelatedEntityIdentifiers extends Shape
{
    /**
     * @param array{
     *     AwsMarketplaceOffers?: list<string>|null,
     *     AwsMarketplaceOfferSets?: list<string>|null,
     *     Solutions?: list<string>|null,
     *     AwsProducts?: list<string>|null,
     *     AwsMarketplaceSolutions?: list<string>|null,
     *     AwsMarketplaceProducts?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

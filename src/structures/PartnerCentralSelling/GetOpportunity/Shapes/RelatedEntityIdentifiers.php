<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetOpportunity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $AwsMarketplaceOffers
 * @property list<string>|null $AwsProducts
 * @property list<string>|null $Solutions
 */
class RelatedEntityIdentifiers extends Shape
{
    /**
     * @param array{
     *     AwsMarketplaceOffers?: list<string>|null,
     *     AwsProducts?: list<string>|null,
     *     Solutions?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

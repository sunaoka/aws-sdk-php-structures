<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetResourceSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $AwsMarketplaceOffers
 * @property list<string>|null $Solutions
 * @property list<string>|null $AwsProducts
 */
class RelatedEntityIdentifiers extends Shape
{
    /**
     * @param array{
     *     AwsMarketplaceOffers?: list<string>|null,
     *     Solutions?: list<string>|null,
     *     AwsProducts?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

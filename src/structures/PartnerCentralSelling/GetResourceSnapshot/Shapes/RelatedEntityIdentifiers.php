<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetResourceSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $AwsMarketplaceOffers
 * @property list<string> $AwsProducts
 * @property list<string> $Solutions
 */
class RelatedEntityIdentifiers extends Shape
{
    /**
     * @param array{
     *     AwsMarketplaceOffers?: list<string>,
     *     AwsProducts?: list<string>,
     *     Solutions?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

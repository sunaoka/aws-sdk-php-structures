<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\GetOfferTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Allowed'|'Disallowed' $multipleDimensionSelection
 * @property 'Allowed'|'Disallowed' $quantityConfiguration
 */
class Constraints extends Shape
{
    /**
     * @param array{
     *     multipleDimensionSelection: 'Allowed'|'Disallowed',
     *     quantityConfiguration: 'Allowed'|'Disallowed'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\SearchFacets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MIN_AVERAGE_CUSTOMER_RATING'|'MAX_AVERAGE_CUSTOMER_RATING'|'CATEGORY'|'PUBLISHER'|'FULFILLMENT_OPTION_TYPE'|'PRICING_MODEL'|'PRICING_UNIT'|'DEPLOYED_ON_AWS'|'NUMBER_OF_PRODUCTS'|'CERTIFICATES'|'PRODUCT_ID'|'SPECIALIZATION'|'SPECIALIZATION_CATEGORY'|'SELLER_ENGAGEMENT'|'TRUST_CENTER' $filterType
 * @property list<string> $filterValues
 */
class SearchFilter extends Shape
{
    /**
     * @param array{
     *     filterType: 'MIN_AVERAGE_CUSTOMER_RATING'|'MAX_AVERAGE_CUSTOMER_RATING'|'CATEGORY'|'PUBLISHER'|'FULFILLMENT_OPTION_TYPE'|'PRICING_MODEL'|'PRICING_UNIT'|'DEPLOYED_ON_AWS'|'NUMBER_OF_PRODUCTS'|'CERTIFICATES'|'PRODUCT_ID'|'SPECIALIZATION'|'SPECIALIZATION_CATEGORY'|'SELLER_ENGAGEMENT'|'TRUST_CENTER',
     *     filterValues: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

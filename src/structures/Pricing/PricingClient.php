<?php

namespace Sunaoka\Aws\Structures\Pricing;

class PricingClient extends \Aws\Pricing\PricingClient
{
    use DescribeServices\DescribeServicesTrait;
    use GetAttributeValues\GetAttributeValuesTrait;
    use GetPriceListFileUrl\GetPriceListFileUrlTrait;
    use GetProducts\GetProductsTrait;
    use ListPriceLists\ListPriceListsTrait;
}

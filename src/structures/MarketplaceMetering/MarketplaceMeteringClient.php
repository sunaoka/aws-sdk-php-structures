<?php

namespace Sunaoka\Aws\Structures\MarketplaceMetering;

class MarketplaceMeteringClient extends \Aws\MarketplaceMetering\MarketplaceMeteringClient
{
    use BatchMeterUsage\BatchMeterUsageTrait;
    use MeterUsage\MeterUsageTrait;
    use RegisterUsage\RegisterUsageTrait;
    use ResolveCustomer\ResolveCustomerTrait;
}

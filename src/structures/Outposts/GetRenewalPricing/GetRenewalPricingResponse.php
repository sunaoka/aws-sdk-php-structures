<?php

namespace Sunaoka\Aws\Structures\Outposts\GetRenewalPricing;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'PRICED'|'UNABLE_TO_PRICE'|null $PricingResult
 * @property list<Shapes\PricingOption>|null $PricingOptions
 */
class GetRenewalPricingResponse extends Response
{
}

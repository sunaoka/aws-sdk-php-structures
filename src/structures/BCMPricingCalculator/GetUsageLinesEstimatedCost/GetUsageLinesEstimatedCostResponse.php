<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\GetUsageLinesEstimatedCost;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'BEFORE_DISCOUNTS'|'AFTER_DISCOUNTS'|'AFTER_DISCOUNTS_AND_COMMITMENTS'|null $rateType
 * @property double|null $totalCost
 * @property 'USD'|null $currency
 * @property list<Shapes\GetUsageLinesEstimatedCostLineItem>|null $lineItems
 * @property list<Shapes\GetUsageLinesEstimatedCostError>|null $errors
 */
class GetUsageLinesEstimatedCostResponse extends Response
{
}

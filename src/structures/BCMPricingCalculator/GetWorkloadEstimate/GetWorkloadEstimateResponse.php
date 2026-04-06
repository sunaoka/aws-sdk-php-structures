<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\GetWorkloadEstimate;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string|null $name
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $expiresAt
 * @property 'BEFORE_DISCOUNTS'|'AFTER_DISCOUNTS'|'AFTER_DISCOUNTS_AND_COMMITMENTS'|null $rateType
 * @property \Aws\Api\DateTimeResult|null $rateTimestamp
 * @property 'UPDATING'|'VALID'|'INVALID'|'ACTION_NEEDED'|null $status
 * @property double|null $totalCost
 * @property 'USD'|null $costCurrency
 * @property string|null $failureMessage
 */
class GetWorkloadEstimateResponse extends Response
{
}

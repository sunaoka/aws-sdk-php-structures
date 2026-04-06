<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\CreateWorkloadEstimate;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string|null $name
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $expiresAt
 * @property 'BEFORE_DISCOUNTS'|'AFTER_DISCOUNTS'|null $rateType
 * @property \Aws\Api\DateTimeResult|null $rateTimestamp
 * @property 'UPDATING'|'VALID'|'INVALID'|'ACTION_NEEDED'|null $status
 * @property double|null $totalCost
 * @property 'USD'|null $costCurrency
 * @property string|null $failureMessage
 */
class CreateWorkloadEstimateResponse extends Response
{
}

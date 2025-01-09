<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\UpdateWorkloadEstimate;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $name
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $expiresAt
 * @property 'BEFORE_DISCOUNTS'|'AFTER_DISCOUNTS' $rateType
 * @property \Aws\Api\DateTimeResult $rateTimestamp
 * @property 'UPDATING'|'VALID'|'INVALID'|'ACTION_NEEDED' $status
 * @property double $totalCost
 * @property 'USD' $costCurrency
 * @property string $failureMessage
 */
class UpdateWorkloadEstimateResponse extends Response
{
}

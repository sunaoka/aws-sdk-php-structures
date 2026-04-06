<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\GetBillEstimate;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string|null $name
 * @property 'IN_PROGRESS'|'COMPLETE'|'FAILED'|null $status
 * @property string|null $failureMessage
 * @property Shapes\BillInterval|null $billInterval
 * @property Shapes\BillEstimateCostSummary|null $costSummary
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $expiresAt
 */
class GetBillEstimateResponse extends Response
{
}

<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\CreateBillEstimate;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $name
 * @property 'IN_PROGRESS'|'COMPLETE'|'FAILED' $status
 * @property string $failureMessage
 * @property Shapes\BillInterval $billInterval
 * @property Shapes\BillEstimateCostSummary $costSummary
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $expiresAt
 */
class CreateBillEstimateResponse extends Response
{
}

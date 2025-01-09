<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\UpdateBillScenario;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $name
 * @property Shapes\BillInterval $billInterval
 * @property 'READY'|'LOCKED'|'FAILED' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $expiresAt
 * @property string $failureMessage
 */
class UpdateBillScenarioResponse extends Response
{
}

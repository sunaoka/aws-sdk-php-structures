<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\CreateBillScenario;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string|null $name
 * @property Shapes\BillInterval|null $billInterval
 * @property 'READY'|'LOCKED'|'FAILED'|'STALE'|null $status
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $expiresAt
 * @property string|null $failureMessage
 * @property 'OPEN'|'PRIORITIZED'|'RESTRICTED'|null $groupSharingPreference
 * @property string|null $costCategoryGroupSharingPreferenceArn
 */
class CreateBillScenarioResponse extends Response
{
}

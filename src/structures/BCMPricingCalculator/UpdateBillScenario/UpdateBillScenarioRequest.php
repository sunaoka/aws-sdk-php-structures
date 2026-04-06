<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\UpdateBillScenario;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $identifier
 * @property string|null $name
 * @property \Aws\Api\DateTimeResult|null $expiresAt
 * @property 'OPEN'|'PRIORITIZED'|'RESTRICTED'|null $groupSharingPreference
 * @property string|null $costCategoryGroupSharingPreferenceArn
 */
class UpdateBillScenarioRequest extends Request
{
    /**
     * @param array{
     *     identifier: string,
     *     name?: string|null,
     *     expiresAt?: \Aws\Api\DateTimeResult|null,
     *     groupSharingPreference?: 'OPEN'|'PRIORITIZED'|'RESTRICTED'|null,
     *     costCategoryGroupSharingPreferenceArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

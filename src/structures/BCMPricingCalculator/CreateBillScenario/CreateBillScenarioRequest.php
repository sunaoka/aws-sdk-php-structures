<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\CreateBillScenario;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $clientToken
 * @property array<string, string>|null $tags
 * @property 'OPEN'|'PRIORITIZED'|'RESTRICTED'|null $groupSharingPreference
 * @property string|null $costCategoryGroupSharingPreferenceArn
 */
class CreateBillScenarioRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     clientToken?: string|null,
     *     tags?: array<string, string>|null,
     *     groupSharingPreference?: 'OPEN'|'PRIORITIZED'|'RESTRICTED'|null,
     *     costCategoryGroupSharingPreferenceArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

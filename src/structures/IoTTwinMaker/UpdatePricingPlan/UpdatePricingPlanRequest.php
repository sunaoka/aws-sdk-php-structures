<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\UpdatePricingPlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'BASIC'|'STANDARD'|'TIERED_BUNDLE' $pricingMode
 * @property list<string> $bundleNames
 */
class UpdatePricingPlanRequest extends Request
{
    /**
     * @param array{
     *     pricingMode: 'BASIC'|'STANDARD'|'TIERED_BUNDLE',
     *     bundleNames?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

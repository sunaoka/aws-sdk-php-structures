<?php

namespace Sunaoka\Aws\Structures\LocationService\UpdateRouteCalculator;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CalculatorName
 * @property 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement'|null $PricingPlan
 * @property string|null $Description
 */
class UpdateRouteCalculatorRequest extends Request
{
    /**
     * @param array{
     *     CalculatorName: string,
     *     PricingPlan?: 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement'|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

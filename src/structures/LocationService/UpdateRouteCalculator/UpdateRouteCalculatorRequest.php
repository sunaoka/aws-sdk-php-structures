<?php

namespace Sunaoka\Aws\Structures\LocationService\UpdateRouteCalculator;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CalculatorName
 * @property string|null $Description
 * @property 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement'|null $PricingPlan
 */
class UpdateRouteCalculatorRequest extends Request
{
    /**
     * @param array{
     *     CalculatorName: string,
     *     Description?: string|null,
     *     PricingPlan?: 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

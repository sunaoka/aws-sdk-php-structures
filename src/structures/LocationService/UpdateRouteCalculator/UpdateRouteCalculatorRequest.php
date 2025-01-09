<?php

namespace Sunaoka\Aws\Structures\LocationService\UpdateRouteCalculator;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CalculatorName
 * @property 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement' $PricingPlan
 * @property string $Description
 */
class UpdateRouteCalculatorRequest extends Request
{
    /**
     * @param array{
     *     CalculatorName: string,
     *     PricingPlan?: 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement',
     *     Description?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

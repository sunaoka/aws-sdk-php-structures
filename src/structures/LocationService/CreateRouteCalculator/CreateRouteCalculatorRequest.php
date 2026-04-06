<?php

namespace Sunaoka\Aws\Structures\LocationService\CreateRouteCalculator;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CalculatorName
 * @property string $DataSource
 * @property 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement'|null $PricingPlan
 * @property string|null $Description
 * @property array<string, string>|null $Tags
 */
class CreateRouteCalculatorRequest extends Request
{
    /**
     * @param array{
     *     CalculatorName: string,
     *     DataSource: string,
     *     PricingPlan?: 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement'|null,
     *     Description?: string|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

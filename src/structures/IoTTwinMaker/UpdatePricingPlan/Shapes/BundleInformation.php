<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\UpdatePricingPlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $bundleNames
 * @property 'TIER_1'|'TIER_2'|'TIER_3'|'TIER_4' $pricingTier
 */
class BundleInformation extends Shape
{
    /**
     * @param array{
     *     bundleNames: list<string>,
     *     pricingTier?: 'TIER_1'|'TIER_2'|'TIER_3'|'TIER_4'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

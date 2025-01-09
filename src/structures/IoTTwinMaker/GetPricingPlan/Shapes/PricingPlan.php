<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\GetPricingPlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $billableEntityCount
 * @property BundleInformation $bundleInformation
 * @property \Aws\Api\DateTimeResult $effectiveDateTime
 * @property 'BASIC'|'STANDARD'|'TIERED_BUNDLE' $pricingMode
 * @property \Aws\Api\DateTimeResult $updateDateTime
 * @property 'DEFAULT'|'PRICING_TIER_UPDATE'|'ENTITY_COUNT_UPDATE'|'PRICING_MODE_UPDATE'|'OVERWRITTEN' $updateReason
 */
class PricingPlan extends Shape
{
    /**
     * @param array{
     *     billableEntityCount?: int,
     *     bundleInformation?: BundleInformation,
     *     effectiveDateTime: \Aws\Api\DateTimeResult,
     *     pricingMode: 'BASIC'|'STANDARD'|'TIERED_BUNDLE',
     *     updateDateTime: \Aws\Api\DateTimeResult,
     *     updateReason: 'DEFAULT'|'PRICING_TIER_UPDATE'|'ENTITY_COUNT_UPDATE'|'PRICING_MODE_UPDATE'|'OVERWRITTEN'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

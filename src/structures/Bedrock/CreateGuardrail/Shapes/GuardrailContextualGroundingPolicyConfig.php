<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateGuardrail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GuardrailContextualGroundingFilterConfig> $filtersConfig
 * @property GuardrailContextualGroundingTierConfig|null $tierConfig
 */
class GuardrailContextualGroundingPolicyConfig extends Shape
{
    /**
     * @param array{
     *     filtersConfig: list<GuardrailContextualGroundingFilterConfig>,
     *     tierConfig?: GuardrailContextualGroundingTierConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

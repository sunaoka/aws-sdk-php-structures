<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateAIGuardrail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GuardrailContextualGroundingFilterConfig> $filtersConfig
 */
class AIGuardrailContextualGroundingPolicyConfig extends Shape
{
    /**
     * @param array{filtersConfig: list<GuardrailContextualGroundingFilterConfig>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

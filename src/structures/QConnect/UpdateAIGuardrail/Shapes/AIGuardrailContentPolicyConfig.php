<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateAIGuardrail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GuardrailContentFilterConfig> $filtersConfig
 */
class AIGuardrailContentPolicyConfig extends Shape
{
    /**
     * @param array{filtersConfig: list<GuardrailContentFilterConfig>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

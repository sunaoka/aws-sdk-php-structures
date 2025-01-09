<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GuardrailContextualGroundingFilter> $filters
 */
class GuardrailContextualGroundingPolicyAssessment extends Shape
{
    /**
     * @param array{filters?: list<GuardrailContextualGroundingFilter>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\Converse\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GuardrailContextualGroundingFilter>|null $filters
 */
class GuardrailContextualGroundingPolicyAssessment extends Shape
{
    /**
     * @param array{filters?: list<GuardrailContextualGroundingFilter>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

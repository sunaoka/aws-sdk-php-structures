<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetGuardrail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GuardrailContextualGroundingFilter> $filters
 * @property GuardrailContextualGroundingTier|null $tier
 */
class GuardrailContextualGroundingPolicy extends Shape
{
    /**
     * @param array{
     *     filters: list<GuardrailContextualGroundingFilter>,
     *     tier?: GuardrailContextualGroundingTier|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

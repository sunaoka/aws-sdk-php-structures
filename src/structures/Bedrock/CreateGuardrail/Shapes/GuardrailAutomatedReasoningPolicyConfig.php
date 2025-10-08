<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateGuardrail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $policies
 * @property double|null $confidenceThreshold
 */
class GuardrailAutomatedReasoningPolicyConfig extends Shape
{
    /**
     * @param array{
     *     policies: list<string>,
     *     confidenceThreshold?: double|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

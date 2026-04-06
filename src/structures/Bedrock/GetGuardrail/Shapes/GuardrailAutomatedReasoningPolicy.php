<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetGuardrail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $policies
 * @property double|null $confidenceThreshold
 */
class GuardrailAutomatedReasoningPolicy extends Shape
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

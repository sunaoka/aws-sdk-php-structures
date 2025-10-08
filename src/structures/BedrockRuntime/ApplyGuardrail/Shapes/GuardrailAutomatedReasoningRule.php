<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ApplyGuardrail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $identifier
 * @property string|null $policyVersionArn
 */
class GuardrailAutomatedReasoningRule extends Shape
{
    /**
     * @param array{
     *     identifier?: string|null,
     *     policyVersionArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\AgenticRetrieveStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AgenticRetrieveGuardrailWarning|null $guardrail
 * @property AgenticRetrieveWarningMessage|null $message
 */
class AgenticRetrieveWarning extends Shape
{
    /**
     * @param array{
     *     guardrail?: AgenticRetrieveGuardrailWarning|null,
     *     message?: AgenticRetrieveWarningMessage|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

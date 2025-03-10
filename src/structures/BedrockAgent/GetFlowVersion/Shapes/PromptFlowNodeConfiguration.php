<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetFlowVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GuardrailConfiguration|null $guardrailConfiguration
 * @property PromptFlowNodeSourceConfiguration $sourceConfiguration
 */
class PromptFlowNodeConfiguration extends Shape
{
    /**
     * @param array{
     *     guardrailConfiguration?: GuardrailConfiguration|null,
     *     sourceConfiguration: PromptFlowNodeSourceConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

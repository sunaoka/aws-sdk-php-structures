<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateFlowVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GuardrailConfiguration $guardrailConfiguration
 * @property PromptFlowNodeSourceConfiguration $sourceConfiguration
 */
class PromptFlowNodeConfiguration extends Shape
{
    /**
     * @param array{
     *     guardrailConfiguration?: GuardrailConfiguration,
     *     sourceConfiguration: PromptFlowNodeSourceConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

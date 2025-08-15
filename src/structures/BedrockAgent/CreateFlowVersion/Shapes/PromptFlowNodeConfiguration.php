<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateFlowVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PromptFlowNodeSourceConfiguration $sourceConfiguration
 * @property GuardrailConfiguration|null $guardrailConfiguration
 */
class PromptFlowNodeConfiguration extends Shape
{
    /**
     * @param array{
     *     sourceConfiguration: PromptFlowNodeSourceConfiguration,
     *     guardrailConfiguration?: GuardrailConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $overrideLambda
 * @property list<PromptConfiguration> $promptConfigurations
 */
class PromptOverrideConfiguration extends Shape
{
    /**
     * @param array{
     *     overrideLambda?: string,
     *     promptConfigurations: list<PromptConfiguration>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

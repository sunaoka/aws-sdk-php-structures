<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $text
 * @property SystemPromptConfigurationBundle|null $configurationBundle
 */
class SystemPromptConfig extends Shape
{
    /**
     * @param array{
     *     text?: string|null,
     *     configurationBundle?: SystemPromptConfigurationBundle|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

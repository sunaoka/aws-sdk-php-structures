<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ToolDescriptionTextInput|null $toolDescriptionText
 * @property ToolDescriptionConfigurationBundle|null $configurationBundle
 */
class ToolDescriptionSource extends Shape
{
    /**
     * @param array{
     *     toolDescriptionText?: ToolDescriptionTextInput|null,
     *     configurationBundle?: ToolDescriptionConfigurationBundle|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $toolName
 * @property string $toolDescriptionJsonPath
 */
class ConfigurationBundleToolEntry extends Shape
{
    /**
     * @param array{
     *     toolName: string,
     *     toolDescriptionJsonPath: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

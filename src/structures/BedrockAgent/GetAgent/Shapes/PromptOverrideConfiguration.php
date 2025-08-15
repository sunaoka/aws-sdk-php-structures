<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PromptConfiguration> $promptConfigurations
 * @property string|null $overrideLambda
 */
class PromptOverrideConfiguration extends Shape
{
    /**
     * @param array{
     *     promptConfigurations: list<PromptConfiguration>,
     *     overrideLambda?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

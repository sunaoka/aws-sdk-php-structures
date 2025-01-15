<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $overrideLambda
 * @property list<PromptConfiguration> $promptConfigurations
 */
class PromptOverrideConfiguration extends Shape
{
    /**
     * @param array{
     *     overrideLambda?: string|null,
     *     promptConfigurations: list<PromptConfiguration>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

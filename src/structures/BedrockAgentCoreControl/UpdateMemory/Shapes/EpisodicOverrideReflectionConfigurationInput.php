<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateMemory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $appendToPrompt
 * @property string $modelId
 * @property list<string>|null $namespaces
 */
class EpisodicOverrideReflectionConfigurationInput extends Shape
{
    /**
     * @param array{
     *     appendToPrompt: string,
     *     modelId: string,
     *     namespaces?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

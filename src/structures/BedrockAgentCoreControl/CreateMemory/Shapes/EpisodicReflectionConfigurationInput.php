<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateMemory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $namespaces
 * @property list<string>|null $namespaceTemplates
 */
class EpisodicReflectionConfigurationInput extends Shape
{
    /**
     * @param array{
     *     namespaces?: list<string>|null,
     *     namespaceTemplates?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

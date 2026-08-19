<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\CreateEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $namespaceVariables
 */
class ExtractionConfig extends Shape
{
    /**
     * @param array{namespaceVariables?: array<string, string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

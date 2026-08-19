<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetMemory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $allowedValues
 * @property string|null $regexPattern
 */
class NamespaceKeyValidation extends Shape
{
    /**
     * @param array{
     *     allowedValues?: list<string>|null,
     *     regexPattern?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Bedrock\UpdateGuardrail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $definition
 * @property list<string> $examples
 * @property 'DENY' $type
 */
class GuardrailTopicConfig extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     definition: string,
     *     examples?: list<string>,
     *     type: 'DENY'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

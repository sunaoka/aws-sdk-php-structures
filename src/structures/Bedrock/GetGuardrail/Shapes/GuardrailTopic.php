<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetGuardrail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $definition
 * @property list<string> $examples
 * @property 'DENY' $type
 */
class GuardrailTopic extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     definition: string,
     *     examples?: list<string>,
     *     type?: 'DENY'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

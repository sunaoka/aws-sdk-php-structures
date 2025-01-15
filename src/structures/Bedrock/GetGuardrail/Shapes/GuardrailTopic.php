<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetGuardrail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $definition
 * @property list<string>|null $examples
 * @property 'DENY'|null $type
 */
class GuardrailTopic extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     definition: string,
     *     examples?: list<string>|null,
     *     type?: 'DENY'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

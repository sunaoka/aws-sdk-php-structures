<?php

namespace Sunaoka\Aws\Structures\QConnect\GetAIGuardrail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $definition
 * @property list<string> $examples
 * @property string $name
 * @property 'DENY' $type
 */
class GuardrailTopicConfig extends Shape
{
    /**
     * @param array{
     *     definition: string,
     *     examples?: list<string>,
     *     name: string,
     *     type: 'DENY'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

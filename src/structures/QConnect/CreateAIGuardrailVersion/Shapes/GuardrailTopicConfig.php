<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateAIGuardrailVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $definition
 * @property list<string>|null $examples
 * @property 'DENY' $type
 */
class GuardrailTopicConfig extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     definition: string,
     *     examples?: list<string>|null,
     *     type: 'DENY'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

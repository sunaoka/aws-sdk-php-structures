<?php

namespace Sunaoka\Aws\Structures\Bedrock\UpdateGuardrail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $definition
 * @property list<string>|null $examples
 * @property 'DENY' $type
 * @property 'BLOCK'|'NONE'|null $inputAction
 * @property 'BLOCK'|'NONE'|null $outputAction
 * @property bool|null $inputEnabled
 * @property bool|null $outputEnabled
 */
class GuardrailTopicConfig extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     definition: string,
     *     examples?: list<string>|null,
     *     type: 'DENY',
     *     inputAction?: 'BLOCK'|'NONE'|null,
     *     outputAction?: 'BLOCK'|'NONE'|null,
     *     inputEnabled?: bool|null,
     *     outputEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

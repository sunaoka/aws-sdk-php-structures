<?php

namespace Sunaoka\Aws\Structures\Bedrock\UpdateGuardrail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string|null $description
 * @property string $pattern
 * @property 'BLOCK'|'ANONYMIZE'|'NONE' $action
 * @property 'BLOCK'|'ANONYMIZE'|'NONE'|null $inputAction
 * @property 'BLOCK'|'ANONYMIZE'|'NONE'|null $outputAction
 * @property bool|null $inputEnabled
 * @property bool|null $outputEnabled
 */
class GuardrailRegexConfig extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     pattern: string,
     *     action: 'BLOCK'|'ANONYMIZE'|'NONE',
     *     inputAction?: 'BLOCK'|'ANONYMIZE'|'NONE'|null,
     *     outputAction?: 'BLOCK'|'ANONYMIZE'|'NONE'|null,
     *     inputEnabled?: bool|null,
     *     outputEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

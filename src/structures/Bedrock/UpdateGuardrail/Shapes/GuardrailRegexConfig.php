<?php

namespace Sunaoka\Aws\Structures\Bedrock\UpdateGuardrail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $description
 * @property string $pattern
 * @property 'BLOCK'|'ANONYMIZE' $action
 */
class GuardrailRegexConfig extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     description?: string,
     *     pattern: string,
     *     action: 'BLOCK'|'ANONYMIZE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

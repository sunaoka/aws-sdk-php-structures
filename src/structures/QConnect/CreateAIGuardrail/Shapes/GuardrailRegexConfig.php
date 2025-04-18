<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateAIGuardrail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string|null $description
 * @property string $pattern
 * @property 'BLOCK'|'ANONYMIZE' $action
 */
class GuardrailRegexConfig extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     pattern: string,
     *     action: 'BLOCK'|'ANONYMIZE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

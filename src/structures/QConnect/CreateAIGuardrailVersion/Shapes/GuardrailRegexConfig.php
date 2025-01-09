<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateAIGuardrailVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BLOCK'|'ANONYMIZE' $action
 * @property string $description
 * @property string $name
 * @property string $pattern
 */
class GuardrailRegexConfig extends Shape
{
    /**
     * @param array{
     *     action: 'BLOCK'|'ANONYMIZE',
     *     description?: string,
     *     name: string,
     *     pattern: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

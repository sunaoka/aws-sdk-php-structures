<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\InvokeGuardrailChecks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'VIOLENCE'|'HATE'|'SEXUAL'|'MISCONDUCT'|'INSULTS' $category
 */
class GuardrailChecksContentFilterCategoryConfig extends Shape
{
    /**
     * @param array{category: 'VIOLENCE'|'HATE'|'SEXUAL'|'MISCONDUCT'|'INSULTS'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

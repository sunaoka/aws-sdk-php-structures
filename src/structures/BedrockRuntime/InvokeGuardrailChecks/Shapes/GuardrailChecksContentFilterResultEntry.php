<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\InvokeGuardrailChecks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'VIOLENCE'|'HATE'|'SEXUAL'|'MISCONDUCT'|'INSULTS' $category
 * @property double $severityScore
 */
class GuardrailChecksContentFilterResultEntry extends Shape
{
    /**
     * @param array{
     *     category: 'VIOLENCE'|'HATE'|'SEXUAL'|'MISCONDUCT'|'INSULTS',
     *     severityScore: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

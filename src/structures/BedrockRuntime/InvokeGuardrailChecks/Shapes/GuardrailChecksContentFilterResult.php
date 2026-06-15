<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\InvokeGuardrailChecks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GuardrailChecksContentFilterResultEntry> $results
 */
class GuardrailChecksContentFilterResult extends Shape
{
    /**
     * @param array{results: list<GuardrailChecksContentFilterResultEntry>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

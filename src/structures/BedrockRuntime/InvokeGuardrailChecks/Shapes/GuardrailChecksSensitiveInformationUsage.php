<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\InvokeGuardrailChecks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $textUnits
 */
class GuardrailChecksSensitiveInformationUsage extends Shape
{
    /**
     * @param array{textUnits: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

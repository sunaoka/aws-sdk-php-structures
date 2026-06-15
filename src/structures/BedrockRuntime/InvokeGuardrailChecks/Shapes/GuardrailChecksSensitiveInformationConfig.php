<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\InvokeGuardrailChecks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GuardrailChecksSensitiveInformationEntityConfig> $entities
 */
class GuardrailChecksSensitiveInformationConfig extends Shape
{
    /**
     * @param array{entities: list<GuardrailChecksSensitiveInformationEntityConfig>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

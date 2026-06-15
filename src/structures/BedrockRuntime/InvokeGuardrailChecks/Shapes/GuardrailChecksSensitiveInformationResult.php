<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\InvokeGuardrailChecks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GuardrailChecksSensitiveInformationResultEntry> $results
 * @property bool|null $truncated
 */
class GuardrailChecksSensitiveInformationResult extends Shape
{
    /**
     * @param array{
     *     results: list<GuardrailChecksSensitiveInformationResultEntry>,
     *     truncated?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

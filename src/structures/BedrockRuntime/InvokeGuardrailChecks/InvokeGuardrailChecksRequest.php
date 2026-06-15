<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\InvokeGuardrailChecks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\GuardrailChecksMessage> $messages
 * @property Shapes\GuardrailChecksConfig $checks
 */
class InvokeGuardrailChecksRequest extends Request
{
    /**
     * @param array{
     *     messages: list<Shapes\GuardrailChecksMessage>,
     *     checks: Shapes\GuardrailChecksConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

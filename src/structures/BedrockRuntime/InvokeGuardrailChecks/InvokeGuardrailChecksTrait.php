<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\InvokeGuardrailChecks;

trait InvokeGuardrailChecksTrait
{
    /**
     * @param InvokeGuardrailChecksRequest $args
     * @return InvokeGuardrailChecksResponse
     */
    public function invokeGuardrailChecks(InvokeGuardrailChecksRequest $args)
    {
        $result = parent::invokeGuardrailChecks($args->toArray());
        return new InvokeGuardrailChecksResponse($result->toArray());
    }
}

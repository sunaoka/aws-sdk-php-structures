<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ApplyGuardrail;

trait ApplyGuardrailTrait
{
    /**
     * @param ApplyGuardrailRequest $args
     * @return ApplyGuardrailResponse
     */
    public function applyGuardrail(ApplyGuardrailRequest $args)
    {
        $result = parent::applyGuardrail($args->toArray());
        return new ApplyGuardrailResponse($result->toArray());
    }
}

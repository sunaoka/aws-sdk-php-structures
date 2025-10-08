<?php

namespace Sunaoka\Aws\Structures\QConnect\GetAIGuardrail;

trait GetAIGuardrailTrait
{
    /**
     * @param GetAIGuardrailRequest $args
     * @return GetAIGuardrailResponse
     */
    public function getAIGuardrail(GetAIGuardrailRequest $args)
    {
        $result = parent::getAIGuardrail($args->toArray());
        return new GetAIGuardrailResponse($result->toArray());
    }
}

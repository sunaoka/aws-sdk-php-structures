<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateAIGuardrail;

trait CreateAIGuardrailTrait
{
    /**
     * @param CreateAIGuardrailRequest $args
     * @return CreateAIGuardrailResponse
     */
    public function createAIGuardrail(CreateAIGuardrailRequest $args)
    {
        $result = parent::createAIGuardrail($args->toArray());
        return new CreateAIGuardrailResponse($result->toArray());
    }
}

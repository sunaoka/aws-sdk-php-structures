<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateAIGuardrail;

trait UpdateAIGuardrailTrait
{
    /**
     * @param UpdateAIGuardrailRequest $args
     * @return UpdateAIGuardrailResponse
     */
    public function updateAIGuardrail(UpdateAIGuardrailRequest $args)
    {
        $result = parent::updateAIGuardrail($args->toArray());
        return new UpdateAIGuardrailResponse($result->toArray());
    }
}

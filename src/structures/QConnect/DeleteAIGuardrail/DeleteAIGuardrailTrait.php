<?php

namespace Sunaoka\Aws\Structures\QConnect\DeleteAIGuardrail;

trait DeleteAIGuardrailTrait
{
    /**
     * @param DeleteAIGuardrailRequest $args
     * @return DeleteAIGuardrailResponse
     */
    public function deleteAIGuardrail(DeleteAIGuardrailRequest $args)
    {
        $result = parent::deleteAIGuardrail($args->toArray());
        return new DeleteAIGuardrailResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\QConnect\DeleteAIGuardrailVersion;

trait DeleteAIGuardrailVersionTrait
{
    /**
     * @param DeleteAIGuardrailVersionRequest $args
     * @return DeleteAIGuardrailVersionResponse
     */
    public function deleteAIGuardrailVersion(DeleteAIGuardrailVersionRequest $args)
    {
        $result = parent::deleteAIGuardrailVersion($args->toArray());
        return new DeleteAIGuardrailVersionResponse($result->toArray());
    }
}

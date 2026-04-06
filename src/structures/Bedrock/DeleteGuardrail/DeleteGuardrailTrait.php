<?php

namespace Sunaoka\Aws\Structures\Bedrock\DeleteGuardrail;

trait DeleteGuardrailTrait
{
    /**
     * @param DeleteGuardrailRequest $args
     * @return DeleteGuardrailResponse
     */
    public function deleteGuardrail(DeleteGuardrailRequest $args)
    {
        $result = parent::deleteGuardrail($args->toArray());
        return new DeleteGuardrailResponse($result->toArray());
    }
}

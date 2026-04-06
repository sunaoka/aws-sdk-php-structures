<?php

namespace Sunaoka\Aws\Structures\Bedrock\UpdateGuardrail;

trait UpdateGuardrailTrait
{
    /**
     * @param UpdateGuardrailRequest $args
     * @return UpdateGuardrailResponse
     */
    public function updateGuardrail(UpdateGuardrailRequest $args)
    {
        $result = parent::updateGuardrail($args->toArray());
        return new UpdateGuardrailResponse($result->toArray());
    }
}

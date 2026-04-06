<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetGuardrail;

trait GetGuardrailTrait
{
    /**
     * @param GetGuardrailRequest $args
     * @return GetGuardrailResponse
     */
    public function getGuardrail(GetGuardrailRequest $args)
    {
        $result = parent::getGuardrail($args->toArray());
        return new GetGuardrailResponse($result->toArray());
    }
}

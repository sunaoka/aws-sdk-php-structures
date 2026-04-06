<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateGuardrail;

trait CreateGuardrailTrait
{
    /**
     * @param CreateGuardrailRequest $args
     * @return CreateGuardrailResponse
     */
    public function createGuardrail(CreateGuardrailRequest $args)
    {
        $result = parent::createGuardrail($args->toArray());
        return new CreateGuardrailResponse($result->toArray());
    }
}

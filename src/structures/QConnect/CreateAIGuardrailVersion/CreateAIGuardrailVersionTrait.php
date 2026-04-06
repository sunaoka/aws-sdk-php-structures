<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateAIGuardrailVersion;

trait CreateAIGuardrailVersionTrait
{
    /**
     * @param CreateAIGuardrailVersionRequest $args
     * @return CreateAIGuardrailVersionResponse
     */
    public function createAIGuardrailVersion(CreateAIGuardrailVersionRequest $args)
    {
        $result = parent::createAIGuardrailVersion($args->toArray());
        return new CreateAIGuardrailVersionResponse($result->toArray());
    }
}

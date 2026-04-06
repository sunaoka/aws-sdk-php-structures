<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateGuardrailVersion;

trait CreateGuardrailVersionTrait
{
    /**
     * @param CreateGuardrailVersionRequest $args
     * @return CreateGuardrailVersionResponse
     */
    public function createGuardrailVersion(CreateGuardrailVersionRequest $args)
    {
        $result = parent::createGuardrailVersion($args->toArray());
        return new CreateGuardrailVersionResponse($result->toArray());
    }
}

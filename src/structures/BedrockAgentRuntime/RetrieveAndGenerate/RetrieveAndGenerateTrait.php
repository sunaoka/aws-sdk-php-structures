<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\RetrieveAndGenerate;

trait RetrieveAndGenerateTrait
{
    /**
     * @param RetrieveAndGenerateRequest $args
     * @return RetrieveAndGenerateResponse
     */
    public function retrieveAndGenerate(RetrieveAndGenerateRequest $args)
    {
        $result = parent::retrieveAndGenerate($args->toArray());
        return new RetrieveAndGenerateResponse($result->toArray());
    }
}

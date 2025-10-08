<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\StartTestSetGeneration;

trait StartTestSetGenerationTrait
{
    /**
     * @param StartTestSetGenerationRequest $args
     * @return StartTestSetGenerationResponse
     */
    public function startTestSetGeneration(StartTestSetGenerationRequest $args)
    {
        $result = parent::startTestSetGeneration($args->toArray());
        return new StartTestSetGenerationResponse($result->toArray());
    }
}

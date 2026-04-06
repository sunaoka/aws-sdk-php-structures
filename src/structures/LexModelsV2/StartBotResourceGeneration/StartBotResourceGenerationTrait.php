<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\StartBotResourceGeneration;

trait StartBotResourceGenerationTrait
{
    /**
     * @param StartBotResourceGenerationRequest $args
     * @return StartBotResourceGenerationResponse
     */
    public function startBotResourceGeneration(StartBotResourceGenerationRequest $args)
    {
        $result = parent::startBotResourceGeneration($args->toArray());
        return new StartBotResourceGenerationResponse($result->toArray());
    }
}

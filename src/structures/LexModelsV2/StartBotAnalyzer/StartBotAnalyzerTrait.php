<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\StartBotAnalyzer;

trait StartBotAnalyzerTrait
{
    /**
     * @param StartBotAnalyzerRequest $args
     * @return StartBotAnalyzerResponse
     */
    public function startBotAnalyzer(StartBotAnalyzerRequest $args)
    {
        $result = parent::startBotAnalyzer($args->toArray());
        return new StartBotAnalyzerResponse($result->toArray());
    }
}

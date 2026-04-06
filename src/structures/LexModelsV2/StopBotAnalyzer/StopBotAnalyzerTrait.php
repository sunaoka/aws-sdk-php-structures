<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\StopBotAnalyzer;

trait StopBotAnalyzerTrait
{
    /**
     * @param StopBotAnalyzerRequest $args
     * @return StopBotAnalyzerResponse
     */
    public function stopBotAnalyzer(StopBotAnalyzerRequest $args)
    {
        $result = parent::stopBotAnalyzer($args->toArray());
        return new StopBotAnalyzerResponse($result->toArray());
    }
}

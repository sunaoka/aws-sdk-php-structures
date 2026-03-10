<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListBotAnalyzerHistory;

trait ListBotAnalyzerHistoryTrait
{
    /**
     * @param ListBotAnalyzerHistoryRequest $args
     * @return ListBotAnalyzerHistoryResponse
     */
    public function listBotAnalyzerHistory(ListBotAnalyzerHistoryRequest $args)
    {
        $result = parent::listBotAnalyzerHistory($args->toArray());
        return new ListBotAnalyzerHistoryResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListAggregatedUtterances;

trait ListAggregatedUtterancesTrait
{
    /**
     * @param ListAggregatedUtterancesRequest $args
     * @return ListAggregatedUtterancesResponse
     */
    public function listAggregatedUtterances(ListAggregatedUtterancesRequest $args)
    {
        $result = parent::listAggregatedUtterances($args->toArray());
        return new ListAggregatedUtterancesResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\QuickSight\PredictQAResults;

trait PredictQAResultsTrait
{
    /**
     * @param PredictQAResultsRequest $args
     * @return PredictQAResultsResponse
     */
    public function predictQAResults(PredictQAResultsRequest $args)
    {
        $result = parent::predictQAResults($args->toArray());
        return new PredictQAResultsResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\GetGraphSummary;

trait GetGraphSummaryTrait
{
    /**
     * @param GetGraphSummaryRequest $args
     * @return GetGraphSummaryResponse
     */
    public function getGraphSummary(GetGraphSummaryRequest $args)
    {
        $result = parent::getGraphSummary($args->toArray());
        return new GetGraphSummaryResponse($result->toArray());
    }
}

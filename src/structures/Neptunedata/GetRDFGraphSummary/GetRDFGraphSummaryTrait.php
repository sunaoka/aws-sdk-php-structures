<?php

namespace Sunaoka\Aws\Structures\Neptunedata\GetRDFGraphSummary;

trait GetRDFGraphSummaryTrait
{
    /**
     * @param GetRDFGraphSummaryRequest $args
     * @return GetRDFGraphSummaryResponse
     */
    public function getRDFGraphSummary(GetRDFGraphSummaryRequest $args)
    {
        $result = parent::getRDFGraphSummary($args->toArray());
        return new GetRDFGraphSummaryResponse($result->toArray());
    }
}

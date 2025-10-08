<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetJourneyRuns;

trait GetJourneyRunsTrait
{
    /**
     * @param GetJourneyRunsRequest $args
     * @return GetJourneyRunsResponse
     */
    public function getJourneyRuns(GetJourneyRunsRequest $args)
    {
        $result = parent::getJourneyRuns($args->toArray());
        return new GetJourneyRunsResponse($result->toArray());
    }
}

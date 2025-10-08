<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetReservationCoverage;

trait GetReservationCoverageTrait
{
    /**
     * @param GetReservationCoverageRequest $args
     * @return GetReservationCoverageResponse
     */
    public function getReservationCoverage(GetReservationCoverageRequest $args)
    {
        $result = parent::getReservationCoverage($args->toArray());
        return new GetReservationCoverageResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights\DescribeProblemObservations;

trait DescribeProblemObservationsTrait
{
    /**
     * @param DescribeProblemObservationsRequest $args
     * @return DescribeProblemObservationsResponse
     */
    public function describeProblemObservations(DescribeProblemObservationsRequest $args)
    {
        $result = parent::describeProblemObservations($args->toArray());
        return new DescribeProblemObservationsResponse($result->toArray());
    }
}

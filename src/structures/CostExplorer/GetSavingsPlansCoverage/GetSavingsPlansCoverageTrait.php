<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetSavingsPlansCoverage;

trait GetSavingsPlansCoverageTrait
{
    /**
     * @param GetSavingsPlansCoverageRequest $args
     * @return GetSavingsPlansCoverageResponse
     */
    public function getSavingsPlansCoverage(GetSavingsPlansCoverageRequest $args)
    {
        $result = parent::getSavingsPlansCoverage($args->toArray());
        return new GetSavingsPlansCoverageResponse($result->toArray());
    }
}

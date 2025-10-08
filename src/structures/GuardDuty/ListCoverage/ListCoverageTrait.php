<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListCoverage;

trait ListCoverageTrait
{
    /**
     * @param ListCoverageRequest $args
     * @return ListCoverageResponse
     */
    public function listCoverage(ListCoverageRequest $args)
    {
        $result = parent::listCoverage($args->toArray());
        return new ListCoverageResponse($result->toArray());
    }
}

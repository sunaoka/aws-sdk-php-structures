<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GetWorkUnitResults;

trait GetWorkUnitResultsTrait
{
    /**
     * @param GetWorkUnitResultsRequest $args
     * @return GetWorkUnitResultsResponse
     */
    public function getWorkUnitResults(GetWorkUnitResultsRequest $args)
    {
        $result = parent::getWorkUnitResults($args->toArray());
        return new GetWorkUnitResultsResponse($result->toArray());
    }
}

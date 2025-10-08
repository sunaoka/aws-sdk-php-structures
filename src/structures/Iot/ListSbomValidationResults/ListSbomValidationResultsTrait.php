<?php

namespace Sunaoka\Aws\Structures\Iot\ListSbomValidationResults;

trait ListSbomValidationResultsTrait
{
    /**
     * @param ListSbomValidationResultsRequest $args
     * @return ListSbomValidationResultsResponse
     */
    public function listSbomValidationResults(ListSbomValidationResultsRequest $args)
    {
        $result = parent::listSbomValidationResults($args->toArray());
        return new ListSbomValidationResultsResponse($result->toArray());
    }
}

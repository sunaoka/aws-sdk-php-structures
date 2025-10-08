<?php

namespace Sunaoka\Aws\Structures\Inspector2\BatchGetFindingDetails;

trait BatchGetFindingDetailsTrait
{
    /**
     * @param BatchGetFindingDetailsRequest $args
     * @return BatchGetFindingDetailsResponse
     */
    public function batchGetFindingDetails(BatchGetFindingDetailsRequest $args)
    {
        $result = parent::batchGetFindingDetails($args->toArray());
        return new BatchGetFindingDetailsResponse($result->toArray());
    }
}

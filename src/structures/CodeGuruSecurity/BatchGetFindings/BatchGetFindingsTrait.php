<?php

namespace Sunaoka\Aws\Structures\CodeGuruSecurity\BatchGetFindings;

trait BatchGetFindingsTrait
{
    /**
     * @param BatchGetFindingsRequest $args
     * @return BatchGetFindingsResponse
     */
    public function batchGetFindings(BatchGetFindingsRequest $args)
    {
        $result = parent::batchGetFindings($args->toArray());
        return new BatchGetFindingsResponse($result->toArray());
    }
}

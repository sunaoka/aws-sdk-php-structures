<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchUpdateFindings;

trait BatchUpdateFindingsTrait
{
    /**
     * @param BatchUpdateFindingsRequest $args
     * @return BatchUpdateFindingsResponse
     */
    public function batchUpdateFindings(BatchUpdateFindingsRequest $args)
    {
        $result = parent::batchUpdateFindings($args->toArray());
        return new BatchUpdateFindingsResponse($result->toArray());
    }
}

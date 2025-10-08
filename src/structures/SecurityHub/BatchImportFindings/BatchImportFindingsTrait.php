<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings;

trait BatchImportFindingsTrait
{
    /**
     * @param BatchImportFindingsRequest $args
     * @return BatchImportFindingsResponse
     */
    public function batchImportFindings(BatchImportFindingsRequest $args)
    {
        $result = parent::batchImportFindings($args->toArray());
        return new BatchImportFindingsResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\BatchExportFindings;

trait BatchExportFindingsTrait
{
    /**
     * @param BatchExportFindingsRequest $args
     * @return BatchExportFindingsResponse
     */
    public function batchExportFindings(BatchExportFindingsRequest $args)
    {
        $result = parent::batchExportFindings($args->toArray());
        return new BatchExportFindingsResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\BatchUpdateExclusionWindows;

trait BatchUpdateExclusionWindowsTrait
{
    /**
     * @param BatchUpdateExclusionWindowsRequest $args
     * @return BatchUpdateExclusionWindowsResponse
     */
    public function batchUpdateExclusionWindows(BatchUpdateExclusionWindowsRequest $args)
    {
        $result = parent::batchUpdateExclusionWindows($args->toArray());
        return new BatchUpdateExclusionWindowsResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\UpdateDatasetEntries;

trait UpdateDatasetEntriesTrait
{
    /**
     * @param UpdateDatasetEntriesRequest $args
     * @return UpdateDatasetEntriesResponse
     */
    public function updateDatasetEntries(UpdateDatasetEntriesRequest $args)
    {
        $result = parent::updateDatasetEntries($args->toArray());
        return new UpdateDatasetEntriesResponse($result->toArray());
    }
}

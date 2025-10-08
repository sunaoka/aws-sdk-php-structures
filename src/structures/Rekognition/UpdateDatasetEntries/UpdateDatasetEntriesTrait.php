<?php

namespace Sunaoka\Aws\Structures\Rekognition\UpdateDatasetEntries;

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

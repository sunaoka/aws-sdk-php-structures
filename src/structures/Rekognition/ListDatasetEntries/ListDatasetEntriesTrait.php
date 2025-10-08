<?php

namespace Sunaoka\Aws\Structures\Rekognition\ListDatasetEntries;

trait ListDatasetEntriesTrait
{
    /**
     * @param ListDatasetEntriesRequest $args
     * @return ListDatasetEntriesResponse
     */
    public function listDatasetEntries(ListDatasetEntriesRequest $args)
    {
        $result = parent::listDatasetEntries($args->toArray());
        return new ListDatasetEntriesResponse($result->toArray());
    }
}

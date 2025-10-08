<?php

namespace Sunaoka\Aws\Structures\Rekognition\DistributeDatasetEntries;

trait DistributeDatasetEntriesTrait
{
    /**
     * @param DistributeDatasetEntriesRequest $args
     * @return DistributeDatasetEntriesResponse
     */
    public function distributeDatasetEntries(DistributeDatasetEntriesRequest $args)
    {
        $result = parent::distributeDatasetEntries($args->toArray());
        return new DistributeDatasetEntriesResponse($result->toArray());
    }
}

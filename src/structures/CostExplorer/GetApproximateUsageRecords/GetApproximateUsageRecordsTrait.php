<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetApproximateUsageRecords;

trait GetApproximateUsageRecordsTrait
{
    /**
     * @param GetApproximateUsageRecordsRequest $args
     * @return GetApproximateUsageRecordsResponse
     */
    public function getApproximateUsageRecords(GetApproximateUsageRecordsRequest $args)
    {
        $result = parent::getApproximateUsageRecords($args->toArray());
        return new GetApproximateUsageRecordsResponse($result->toArray());
    }
}

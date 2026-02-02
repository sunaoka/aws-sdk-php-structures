<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeImportTaskBatches;

trait DescribeImportTaskBatchesTrait
{
    /**
     * @param DescribeImportTaskBatchesRequest $args
     * @return DescribeImportTaskBatchesResponse
     */
    public function describeImportTaskBatches(DescribeImportTaskBatchesRequest $args)
    {
        $result = parent::describeImportTaskBatches($args->toArray());
        return new DescribeImportTaskBatchesResponse($result->toArray());
    }
}

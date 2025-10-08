<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\DescribeDataIngestionJob;

trait DescribeDataIngestionJobTrait
{
    /**
     * @param DescribeDataIngestionJobRequest $args
     * @return DescribeDataIngestionJobResponse
     */
    public function describeDataIngestionJob(DescribeDataIngestionJobRequest $args)
    {
        $result = parent::describeDataIngestionJob($args->toArray());
        return new DescribeDataIngestionJobResponse($result->toArray());
    }
}

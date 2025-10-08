<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeDatasetImportJob;

trait DescribeDatasetImportJobTrait
{
    /**
     * @param DescribeDatasetImportJobRequest $args
     * @return DescribeDatasetImportJobResponse
     */
    public function describeDatasetImportJob(DescribeDatasetImportJobRequest $args)
    {
        $result = parent::describeDatasetImportJob($args->toArray());
        return new DescribeDatasetImportJobResponse($result->toArray());
    }
}

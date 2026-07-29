<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeDatasetExportJob;

trait DescribeDatasetExportJobTrait
{
    /**
     * @param DescribeDatasetExportJobRequest $args
     * @return DescribeDatasetExportJobResponse
     */
    public function describeDatasetExportJob(DescribeDatasetExportJobRequest $args)
    {
        $result = parent::describeDatasetExportJob($args->toArray());
        return new DescribeDatasetExportJobResponse($result->toArray());
    }
}

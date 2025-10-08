<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeBulkImportJob;

trait DescribeBulkImportJobTrait
{
    /**
     * @param DescribeBulkImportJobRequest $args
     * @return DescribeBulkImportJobResponse
     */
    public function describeBulkImportJob(DescribeBulkImportJobRequest $args)
    {
        $result = parent::describeBulkImportJob($args->toArray());
        return new DescribeBulkImportJobResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\Honeycode\DescribeTableDataImportJob;

trait DescribeTableDataImportJobTrait
{
    /**
     * @param DescribeTableDataImportJobRequest $args
     * @return DescribeTableDataImportJobResponse
     */
    public function describeTableDataImportJob(DescribeTableDataImportJobRequest $args)
    {
        $result = parent::describeTableDataImportJob($args->toArray());
        return new DescribeTableDataImportJobResponse($result->toArray());
    }
}

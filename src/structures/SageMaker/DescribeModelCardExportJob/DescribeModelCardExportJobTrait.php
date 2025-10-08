<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeModelCardExportJob;

trait DescribeModelCardExportJobTrait
{
    /**
     * @param DescribeModelCardExportJobRequest $args
     * @return DescribeModelCardExportJobResponse
     */
    public function describeModelCardExportJob(DescribeModelCardExportJobRequest $args)
    {
        $result = parent::describeModelCardExportJob($args->toArray());
        return new DescribeModelCardExportJobResponse($result->toArray());
    }
}

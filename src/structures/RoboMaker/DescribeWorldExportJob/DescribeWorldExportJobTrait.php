<?php

namespace Sunaoka\Aws\Structures\RoboMaker\DescribeWorldExportJob;

trait DescribeWorldExportJobTrait
{
    /**
     * @param DescribeWorldExportJobRequest $args
     * @return DescribeWorldExportJobResponse
     */
    public function describeWorldExportJob(DescribeWorldExportJobRequest $args)
    {
        $result = parent::describeWorldExportJob($args->toArray());
        return new DescribeWorldExportJobResponse($result->toArray());
    }
}

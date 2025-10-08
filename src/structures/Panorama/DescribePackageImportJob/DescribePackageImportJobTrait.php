<?php

namespace Sunaoka\Aws\Structures\Panorama\DescribePackageImportJob;

trait DescribePackageImportJobTrait
{
    /**
     * @param DescribePackageImportJobRequest $args
     * @return DescribePackageImportJobResponse
     */
    public function describePackageImportJob(DescribePackageImportJobRequest $args)
    {
        $result = parent::describePackageImportJob($args->toArray());
        return new DescribePackageImportJobResponse($result->toArray());
    }
}

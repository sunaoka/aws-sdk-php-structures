<?php

namespace Sunaoka\Aws\Structures\MediaPackage\DescribeHarvestJob;

trait DescribeHarvestJobTrait
{
    /**
     * @param DescribeHarvestJobRequest $args
     * @return DescribeHarvestJobResponse
     */
    public function describeHarvestJob(DescribeHarvestJobRequest $args)
    {
        $result = parent::describeHarvestJob($args->toArray());
        return new DescribeHarvestJobResponse($result->toArray());
    }
}

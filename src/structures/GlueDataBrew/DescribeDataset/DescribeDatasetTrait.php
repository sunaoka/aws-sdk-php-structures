<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\DescribeDataset;

trait DescribeDatasetTrait
{
    /**
     * @param DescribeDatasetRequest $args
     * @return DescribeDatasetResponse
     */
    public function describeDataset(DescribeDatasetRequest $args)
    {
        $result = parent::describeDataset($args->toArray());
        return new DescribeDatasetResponse($result->toArray());
    }
}

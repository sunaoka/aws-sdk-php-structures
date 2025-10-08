<?php

namespace Sunaoka\Aws\Structures\SecurityHub\DescribeStandardsControls;

trait DescribeStandardsControlsTrait
{
    /**
     * @param DescribeStandardsControlsRequest $args
     * @return DescribeStandardsControlsResponse
     */
    public function describeStandardsControls(DescribeStandardsControlsRequest $args)
    {
        $result = parent::describeStandardsControls($args->toArray());
        return new DescribeStandardsControlsResponse($result->toArray());
    }
}

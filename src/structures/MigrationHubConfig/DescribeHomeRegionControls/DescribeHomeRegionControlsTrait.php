<?php

namespace Sunaoka\Aws\Structures\MigrationHubConfig\DescribeHomeRegionControls;

trait DescribeHomeRegionControlsTrait
{
    /**
     * @param DescribeHomeRegionControlsRequest $args
     * @return DescribeHomeRegionControlsResponse
     */
    public function describeHomeRegionControls(DescribeHomeRegionControlsRequest $args)
    {
        $result = parent::describeHomeRegionControls($args->toArray());
        return new DescribeHomeRegionControlsResponse($result->toArray());
    }
}

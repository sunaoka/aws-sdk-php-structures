<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeTrafficMirrorFilters;

trait DescribeTrafficMirrorFiltersTrait
{
    /**
     * @param DescribeTrafficMirrorFiltersRequest $args
     * @return DescribeTrafficMirrorFiltersResponse
     */
    public function describeTrafficMirrorFilters(DescribeTrafficMirrorFiltersRequest $args)
    {
        $result = parent::describeTrafficMirrorFilters($args->toArray());
        return new DescribeTrafficMirrorFiltersResponse($result->toArray());
    }
}

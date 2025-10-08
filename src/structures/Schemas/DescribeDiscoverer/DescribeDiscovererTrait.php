<?php

namespace Sunaoka\Aws\Structures\Schemas\DescribeDiscoverer;

trait DescribeDiscovererTrait
{
    /**
     * @param DescribeDiscovererRequest $args
     * @return DescribeDiscovererResponse
     */
    public function describeDiscoverer(DescribeDiscovererRequest $args)
    {
        $result = parent::describeDiscoverer($args->toArray());
        return new DescribeDiscovererResponse($result->toArray());
    }
}

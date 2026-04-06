<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DescribeMultiRegionParameters;

trait DescribeMultiRegionParametersTrait
{
    /**
     * @param DescribeMultiRegionParametersRequest $args
     * @return DescribeMultiRegionParametersResponse
     */
    public function describeMultiRegionParameters(DescribeMultiRegionParametersRequest $args)
    {
        $result = parent::describeMultiRegionParameters($args->toArray());
        return new DescribeMultiRegionParametersResponse($result->toArray());
    }
}

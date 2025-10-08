<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeConformancePackStatus;

trait DescribeConformancePackStatusTrait
{
    /**
     * @param DescribeConformancePackStatusRequest $args
     * @return DescribeConformancePackStatusResponse
     */
    public function describeConformancePackStatus(DescribeConformancePackStatusRequest $args)
    {
        $result = parent::describeConformancePackStatus($args->toArray());
        return new DescribeConformancePackStatusResponse($result->toArray());
    }
}

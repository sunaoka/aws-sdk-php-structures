<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DescribeModelVersions;

trait DescribeModelVersionsTrait
{
    /**
     * @param DescribeModelVersionsRequest $args
     * @return DescribeModelVersionsResponse
     */
    public function describeModelVersions(DescribeModelVersionsRequest $args)
    {
        $result = parent::describeModelVersions($args->toArray());
        return new DescribeModelVersionsResponse($result->toArray());
    }
}

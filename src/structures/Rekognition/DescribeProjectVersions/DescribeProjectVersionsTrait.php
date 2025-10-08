<?php

namespace Sunaoka\Aws\Structures\Rekognition\DescribeProjectVersions;

trait DescribeProjectVersionsTrait
{
    /**
     * @param DescribeProjectVersionsRequest $args
     * @return DescribeProjectVersionsResponse
     */
    public function describeProjectVersions(DescribeProjectVersionsRequest $args)
    {
        $result = parent::describeProjectVersions($args->toArray());
        return new DescribeProjectVersionsResponse($result->toArray());
    }
}

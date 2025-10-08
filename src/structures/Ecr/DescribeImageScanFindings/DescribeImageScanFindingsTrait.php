<?php

namespace Sunaoka\Aws\Structures\Ecr\DescribeImageScanFindings;

trait DescribeImageScanFindingsTrait
{
    /**
     * @param DescribeImageScanFindingsRequest $args
     * @return DescribeImageScanFindingsResponse
     */
    public function describeImageScanFindings(DescribeImageScanFindingsRequest $args)
    {
        $result = parent::describeImageScanFindings($args->toArray());
        return new DescribeImageScanFindingsResponse($result->toArray());
    }
}

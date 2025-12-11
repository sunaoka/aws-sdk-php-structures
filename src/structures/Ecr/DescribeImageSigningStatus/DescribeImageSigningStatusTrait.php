<?php

namespace Sunaoka\Aws\Structures\Ecr\DescribeImageSigningStatus;

trait DescribeImageSigningStatusTrait
{
    /**
     * @param DescribeImageSigningStatusRequest $args
     * @return DescribeImageSigningStatusResponse
     */
    public function describeImageSigningStatus(DescribeImageSigningStatusRequest $args)
    {
        $result = parent::describeImageSigningStatus($args->toArray());
        return new DescribeImageSigningStatusResponse($result->toArray());
    }
}

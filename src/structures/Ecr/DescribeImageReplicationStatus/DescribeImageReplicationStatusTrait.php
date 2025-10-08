<?php

namespace Sunaoka\Aws\Structures\Ecr\DescribeImageReplicationStatus;

trait DescribeImageReplicationStatusTrait
{
    /**
     * @param DescribeImageReplicationStatusRequest $args
     * @return DescribeImageReplicationStatusResponse
     */
    public function describeImageReplicationStatus(DescribeImageReplicationStatusRequest $args)
    {
        $result = parent::describeImageReplicationStatus($args->toArray());
        return new DescribeImageReplicationStatusResponse($result->toArray());
    }
}

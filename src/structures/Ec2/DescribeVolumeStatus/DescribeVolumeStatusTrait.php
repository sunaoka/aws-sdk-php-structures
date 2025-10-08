<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVolumeStatus;

trait DescribeVolumeStatusTrait
{
    /**
     * @param DescribeVolumeStatusRequest $args
     * @return DescribeVolumeStatusResponse
     */
    public function describeVolumeStatus(DescribeVolumeStatusRequest $args)
    {
        $result = parent::describeVolumeStatus($args->toArray());
        return new DescribeVolumeStatusResponse($result->toArray());
    }
}

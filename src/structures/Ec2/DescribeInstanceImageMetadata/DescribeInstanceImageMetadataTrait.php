<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceImageMetadata;

trait DescribeInstanceImageMetadataTrait
{
    /**
     * @param DescribeInstanceImageMetadataRequest $args
     * @return DescribeInstanceImageMetadataResponse
     */
    public function describeInstanceImageMetadata(DescribeInstanceImageMetadataRequest $args)
    {
        $result = parent::describeInstanceImageMetadata($args->toArray());
        return new DescribeInstanceImageMetadataResponse($result->toArray());
    }
}

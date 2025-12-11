<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcEncryptionControls;

trait DescribeVpcEncryptionControlsTrait
{
    /**
     * @param DescribeVpcEncryptionControlsRequest $args
     * @return DescribeVpcEncryptionControlsResponse
     */
    public function describeVpcEncryptionControls(DescribeVpcEncryptionControlsRequest $args)
    {
        $result = parent::describeVpcEncryptionControls($args->toArray());
        return new DescribeVpcEncryptionControlsResponse($result->toArray());
    }
}

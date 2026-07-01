<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeAccountVpcEncryptionControl;

trait DescribeAccountVpcEncryptionControlTrait
{
    /**
     * @param DescribeAccountVpcEncryptionControlRequest $args
     * @return DescribeAccountVpcEncryptionControlResponse
     */
    public function describeAccountVpcEncryptionControl(DescribeAccountVpcEncryptionControlRequest $args)
    {
        $result = parent::describeAccountVpcEncryptionControl($args->toArray());
        return new DescribeAccountVpcEncryptionControlResponse($result->toArray());
    }
}

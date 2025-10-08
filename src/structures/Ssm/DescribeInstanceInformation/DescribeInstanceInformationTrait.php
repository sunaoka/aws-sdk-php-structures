<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeInstanceInformation;

trait DescribeInstanceInformationTrait
{
    /**
     * @param DescribeInstanceInformationRequest $args
     * @return DescribeInstanceInformationResponse
     */
    public function describeInstanceInformation(DescribeInstanceInformationRequest $args)
    {
        $result = parent::describeInstanceInformation($args->toArray());
        return new DescribeInstanceInformationResponse($result->toArray());
    }
}

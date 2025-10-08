<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeTypeRegistration;

trait DescribeTypeRegistrationTrait
{
    /**
     * @param DescribeTypeRegistrationRequest $args
     * @return DescribeTypeRegistrationResponse
     */
    public function describeTypeRegistration(DescribeTypeRegistrationRequest $args)
    {
        $result = parent::describeTypeRegistration($args->toArray());
        return new DescribeTypeRegistrationResponse($result->toArray());
    }
}

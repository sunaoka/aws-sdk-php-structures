<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeKeyRegistration;

trait DescribeKeyRegistrationTrait
{
    /**
     * @param DescribeKeyRegistrationRequest $args
     * @return DescribeKeyRegistrationResponse
     */
    public function describeKeyRegistration(DescribeKeyRegistrationRequest $args)
    {
        $result = parent::describeKeyRegistration($args->toArray());
        return new DescribeKeyRegistrationResponse($result->toArray());
    }
}

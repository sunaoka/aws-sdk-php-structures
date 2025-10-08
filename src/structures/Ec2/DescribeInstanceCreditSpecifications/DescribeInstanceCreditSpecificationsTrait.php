<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceCreditSpecifications;

trait DescribeInstanceCreditSpecificationsTrait
{
    /**
     * @param DescribeInstanceCreditSpecificationsRequest $args
     * @return DescribeInstanceCreditSpecificationsResponse
     */
    public function describeInstanceCreditSpecifications(DescribeInstanceCreditSpecificationsRequest $args)
    {
        $result = parent::describeInstanceCreditSpecifications($args->toArray());
        return new DescribeInstanceCreditSpecificationsResponse($result->toArray());
    }
}

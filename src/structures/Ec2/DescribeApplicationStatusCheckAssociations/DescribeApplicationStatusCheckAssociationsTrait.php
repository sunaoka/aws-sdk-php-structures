<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeApplicationStatusCheckAssociations;

trait DescribeApplicationStatusCheckAssociationsTrait
{
    /**
     * @param DescribeApplicationStatusCheckAssociationsRequest $args
     * @return DescribeApplicationStatusCheckAssociationsResponse
     */
    public function describeApplicationStatusCheckAssociations(DescribeApplicationStatusCheckAssociationsRequest $args)
    {
        $result = parent::describeApplicationStatusCheckAssociations($args->toArray());
        return new DescribeApplicationStatusCheckAssociationsResponse($result->toArray());
    }
}

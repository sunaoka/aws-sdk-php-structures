<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeIamInstanceProfileAssociations;

trait DescribeIamInstanceProfileAssociationsTrait
{
    /**
     * @param DescribeIamInstanceProfileAssociationsRequest $args
     * @return DescribeIamInstanceProfileAssociationsResponse
     */
    public function describeIamInstanceProfileAssociations(DescribeIamInstanceProfileAssociationsRequest $args)
    {
        $result = parent::describeIamInstanceProfileAssociations($args->toArray());
        return new DescribeIamInstanceProfileAssociationsResponse($result->toArray());
    }
}

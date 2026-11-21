<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeResourceAssociations;

trait DescribeResourceAssociationsTrait
{
    /**
     * @param DescribeResourceAssociationsRequest $args
     * @return DescribeResourceAssociationsResponse
     */
    public function describeResourceAssociations(DescribeResourceAssociationsRequest $args)
    {
        $result = parent::describeResourceAssociations($args->toArray());
        return new DescribeResourceAssociationsResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeDataRepositoryAssociations;

trait DescribeDataRepositoryAssociationsTrait
{
    /**
     * @param DescribeDataRepositoryAssociationsRequest $args
     * @return DescribeDataRepositoryAssociationsResponse
     */
    public function describeDataRepositoryAssociations(DescribeDataRepositoryAssociationsRequest $args)
    {
        $result = parent::describeDataRepositoryAssociations($args->toArray());
        return new DescribeDataRepositoryAssociationsResponse($result->toArray());
    }
}

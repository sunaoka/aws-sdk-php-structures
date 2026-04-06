<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeApplicationAssociations;

trait DescribeApplicationAssociationsTrait
{
    /**
     * @param DescribeApplicationAssociationsRequest $args
     * @return DescribeApplicationAssociationsResponse
     */
    public function describeApplicationAssociations(DescribeApplicationAssociationsRequest $args)
    {
        $result = parent::describeApplicationAssociations($args->toArray());
        return new DescribeApplicationAssociationsResponse($result->toArray());
    }
}

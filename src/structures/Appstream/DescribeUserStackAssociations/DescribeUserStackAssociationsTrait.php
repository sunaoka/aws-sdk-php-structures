<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeUserStackAssociations;

trait DescribeUserStackAssociationsTrait
{
    /**
     * @param DescribeUserStackAssociationsRequest $args
     * @return DescribeUserStackAssociationsResponse
     */
    public function describeUserStackAssociations(DescribeUserStackAssociationsRequest $args)
    {
        $result = parent::describeUserStackAssociations($args->toArray());
        return new DescribeUserStackAssociationsResponse($result->toArray());
    }
}

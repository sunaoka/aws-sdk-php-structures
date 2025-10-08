<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeImageAssociations;

trait DescribeImageAssociationsTrait
{
    /**
     * @param DescribeImageAssociationsRequest $args
     * @return DescribeImageAssociationsResponse
     */
    public function describeImageAssociations(DescribeImageAssociationsRequest $args)
    {
        $result = parent::describeImageAssociations($args->toArray());
        return new DescribeImageAssociationsResponse($result->toArray());
    }
}

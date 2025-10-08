<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeAppBlockBuilderAppBlockAssociations;

trait DescribeAppBlockBuilderAppBlockAssociationsTrait
{
    /**
     * @param DescribeAppBlockBuilderAppBlockAssociationsRequest $args
     * @return DescribeAppBlockBuilderAppBlockAssociationsResponse
     */
    public function describeAppBlockBuilderAppBlockAssociations(
        DescribeAppBlockBuilderAppBlockAssociationsRequest $args,
    ) {
        $result = parent::describeAppBlockBuilderAppBlockAssociations($args->toArray());
        return new DescribeAppBlockBuilderAppBlockAssociationsResponse($result->toArray());
    }
}

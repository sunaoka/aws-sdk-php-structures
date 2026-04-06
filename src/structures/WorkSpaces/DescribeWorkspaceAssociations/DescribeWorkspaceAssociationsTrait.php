<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspaceAssociations;

trait DescribeWorkspaceAssociationsTrait
{
    /**
     * @param DescribeWorkspaceAssociationsRequest $args
     * @return DescribeWorkspaceAssociationsResponse
     */
    public function describeWorkspaceAssociations(DescribeWorkspaceAssociationsRequest $args)
    {
        $result = parent::describeWorkspaceAssociations($args->toArray());
        return new DescribeWorkspaceAssociationsResponse($result->toArray());
    }
}

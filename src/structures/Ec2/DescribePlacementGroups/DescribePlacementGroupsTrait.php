<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribePlacementGroups;

trait DescribePlacementGroupsTrait
{
    /**
     * @param DescribePlacementGroupsRequest $args
     * @return DescribePlacementGroupsResponse
     */
    public function describePlacementGroups(DescribePlacementGroupsRequest $args)
    {
        $result = parent::describePlacementGroups($args->toArray());
        return new DescribePlacementGroupsResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\Efs\DescribeMountTargetSecurityGroups;

trait DescribeMountTargetSecurityGroupsTrait
{
    /**
     * @param DescribeMountTargetSecurityGroupsRequest $args
     * @return DescribeMountTargetSecurityGroupsResponse
     */
    public function describeMountTargetSecurityGroups(DescribeMountTargetSecurityGroupsRequest $args)
    {
        $result = parent::describeMountTargetSecurityGroups($args->toArray());
        return new DescribeMountTargetSecurityGroupsResponse($result->toArray());
    }
}

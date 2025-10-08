<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListTargetGroups;

trait ListTargetGroupsTrait
{
    /**
     * @param ListTargetGroupsRequest $args
     * @return ListTargetGroupsResponse
     */
    public function listTargetGroups(ListTargetGroupsRequest $args)
    {
        $result = parent::listTargetGroups($args->toArray());
        return new ListTargetGroupsResponse($result->toArray());
    }
}
